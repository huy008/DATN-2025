<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carts = $user->carts()->with(['variant', 'product'])->get();

        $total = $this->calculateTotal();

        return view('checkout', compact('carts', 'user', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string',
            'phone' => [
                'required',
                'regex:/^0[0-9]{9}$/',
            ],
        ], [
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'address.string' => 'Địa chỉ phải là chuỗi ký tự.',

            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại không đúng định dạng.',
        ]);

        $order = Order::create([
            'order_number' => time(),
            'user_id' => Auth::id(),
            'total_price' => $this->calculateTotal(),
            'status' => 'pending',
            'phone' => $request->phone,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'note' => $request->note,
        ]);

        $cartItems = Auth::user()->carts;

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'variant_id' => $item['variant_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            if ($item['variant_id']) {
                $variant = ProductVariant::find($item['variant_id']);

                if ($variant && $variant->stock_quantity >= $item['quantity']) {
                    $variant->decrement('stock_quantity', $item['quantity']);
                } else {
                    return back()->withErrors('Biến thể của sản phẩm "' . $variant->product->name . '" không đủ số lượng.');
                }
            } else {
                $product = Product::find($item['product_id']);

                if ($product && $product->stock_quantity >= $item['quantity']) {
                    $product->decrement('stock_quantity', $item['quantity']);
                } else {
                    return back()->withErrors('Sản phẩm "' . $product->name . '" không đủ số lượng.');
                }
            }
        }

        if (Auth::check()) {
            Auth::user()->carts()->delete();
        } else {
            session()->forget('cart');
        }

        switch ($request->payment_method) {
            case 'vnpay':
                $this->vnqay($this->calculateTotal());
                break;
            case 'momo':
                $this->momo_payment($this->calculateTotal());
                break;
            case 'cod':
                return redirect()->route('payment.success')->with([
                    'message' => 'Đặt hàng thành công. Bạn sẽ thanh toán khi nhận hàng.',
                    'status' => 'success',
                ]);
                break;
        }
    }

    public function paymentSuccess(Request $request)
    {
        $data = $request->all();

        if (isset($data['vnp_ResponseCode'])) {
            // Xử lý VNPAY
            if ($data['vnp_ResponseCode'] == '00') {
                $message = 'Thanh toán qua VNPAY thành công!';
                $status = 'success';
            } else {
                $message = 'Thanh toán qua VNPAY thất bại! Vui lòng thử lại.';
                $status = 'error';
            }
        } elseif (isset($data['partnerCode']) && $data['partnerCode'] === 'MOMOBKUN20180529') {
            // Xử lý MoMo
            if ($data['resultCode'] == '0') {
                $message = 'Thanh toán qua MoMo thành công!';
                $status = 'success';
            } else {
                $message = 'Thanh toán qua MoMo thất bại! Vui lòng thử lại.';
                $status = 'error';
            }
        } else {
            $message = session('message', 'Đặt hàng thành công!');
            $status = session('status', 'success');
            $data['totalAmount'] =  $this->calculateTotal();
        }

        return view('payment.success', compact('message', 'status', 'data'));
    }

    private function calculateTotal()
    {
        $total = 0;
        if (Auth::check()) {
            $cartItems = Auth::user()->carts;

            foreach ($cartItems as $item) {
                $total += $item->price * $item->quantity;
            }
        }
        return $total;
    }

    public function vnqay($total)
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/payment-success";
        $vnp_TmnCode = "FIM7LK8X";
        $vnp_HashSecret = "TJTV6G00BMU2FJD6Y58BOSUSXD7S01FT";

        $vnp_TxnRef = time();
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "Shop";
        $vnp_Amount = $total * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momo_payment($total)
    {

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua ATM MoMo";
        $amount = $total;
        $orderId = time() . "";
        $redirectUrl = "http://127.0.0.1:8000/payment-success";
        $ipnUrl = "http://127.0.0.1:8000/payment-success";
        $extraData = "";

        $requestId = time() . "";
        $requestType = "payWithATM";
        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);
        if (isset($jsonResult['payUrl'])) {
            header('Location: ' . $jsonResult['payUrl']);
            die();
        } else {
            dd($jsonResult);
        }
    }
}
