<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repositories\OrderRepository;
use App\Services\OrderService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $orderService;
    protected $orderRepository;

    public function __construct(
       OrderService $orderService,
       OrderRepository $orderRepository,
    ){
        $this->orderService = $orderService;
        $this->orderRepository = $orderRepository;
    }

    public function index(Request $request){
        $orders = $this->orderService->paginate($request);
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'order',
        ];
        $config['seo'] = config('apps.order');
        $template = 'backend.order.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'orders'
        ));
    }

    public function orderList(Request $request)
    {
        $query = Auth::user()
            ->orders()
            ->with('order_items.product')
            ->latest();

        // Lọc theo trạng thái
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Lọc theo khoảng thời gian
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [
                Carbon::parse($request->start_date)->startOfDay(),
                Carbon::parse($request->end_date)->endOfDay()
            ]);
        }

        $orders = $query->paginate(5);

        return view('orders', compact('orders'));
    }

    public function showStatus($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->with('order_items.product')->first();

        if (!$order) {
            return view('orders.status-not-found', ['orderNumber' => $orderNumber]);
        }

        return view('status', compact('order'));
    }

    public function create(){
        $config['seo'] = config('apps.order');
        $config['method'] = 'create';
        $template = 'backend.order.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
        ));
    }

    public function store(Request $request){
        if($this->orderService->create($request)){
            return redirect()->route('order.index')->with('success','Thêm mới bản ghi thành công');
        }
        return redirect()->route('order.index')->with('error','Thêm mới bản ghi không thành công. Hãy thử lại');
    }

    public function edit($id){
        $order = $this->orderRepository->findById($id);
        $config['seo'] = config('apps.order');
        $config['method'] = 'edit';
        $template = 'backend.order.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'order',
        ));
    }

    public function update($id, Request $request){
        if($this->orderService->update($id, $request)){
            return redirect()->route('order.index')->with('success','Cập nhật bản ghi thành công');
        }
        return redirect()->route('order.index')->with('error','Cập nhật bản ghi không thành công. Hãy thử lại');
    }

    public function destroy($id){
        if($this->orderService->destroy($id)){
            toastr()->success('Hủy đơn hàng thành công', 'Thành công', ['timeOut' => 2000]);
            return redirect()->route('orders.index');
        }
        toastr()->error('Hủy đơn hàng không thành công', 'Thất bại', ['timeOut' => 2000]);
        return redirect()->route('orders.index');
    }
}
