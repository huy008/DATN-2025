<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductVariant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct() {}

    public function index(Request $request)
    {
        $from = $request->from ?? Carbon::now()->startOfMonth()->toDateString();
        $to = $request->to ?? Carbon::now()->endOfMonth()->toDateString();

        $orders = Order::whereBetween('created_at', [$from, $to])->get();

        $totalRevenue = $orders->where('status', 'completed')->sum('total_price');
        $totalRevenueByInter = $orders->where('status', 'completed')->whereIn('payment_method', ['vnpay', 'momo'])->sum('total_price');
        $totalRevenueByCod = $orders->where('status', 'completed')->where('payment_method', 'cod')->sum('total_price');
        $successfulOrders = $orders->where('status', 'completed')->count();
        $cancelledOrders = $orders->where('status', 'cancelled')->count();
        $successfulCancelledOrders = $cancelledOrders + $successfulOrders;
        $totalOrders = $orders->count();

        // Tính tỷ lệ đơn hàng
        $successRate = $successfulCancelledOrders > 0 ? round(($successfulOrders / $successfulCancelledOrders) * 100) : 0;

        $cancelRate = $successfulCancelledOrders > 0 ? round(($cancelledOrders / $successfulCancelledOrders) * 100) : 0;

        // Tính doanh thu trung bình
        $averageRevenue = $successfulOrders > 0 ? round($totalRevenue / $successfulOrders) : 0;

        // Tìm đơn hàng có giá trị cao nhất
        $highestOrder = $orders->where('status', 'completed')->max('total_price') ?? 0;

        $topProducts = OrderItem::select('product_id', DB::raw('SUM(quantity) as total_sold'), DB::raw('SUM(quantity * price) as total_revenue'))
            ->whereHas('order', function ($q) use ($from, $to) {
                $q->where('status', 'completed')
                    ->whereBetween('created_at', [$from, $to]);
            })
            ->whereIn('order_id', $orders->pluck('id'))
            ->groupBy('product_id')
            ->with('product')
            ->orderByDesc('total_sold')
            ->take(5)
            ->get()
            ->map(function ($item) {
                $item->name = $item->product->name ?? 'N/A';
                return $item;
            });

        $products = Product::with('variants')->get();

        $inventory = $products->map(function ($product) {
            $hasVariants = $product->variants->count() > 0;

            return (object)[
                'id' => $product->id,
                'name' => $product->name,
                'stock_quantity' => $hasVariants
                    ? $product->variants->sum('stock_quantity')
                    : $product->stock_quantity,
                'has_variants' => $hasVariants,
            ];
        });

        $totalStock = $inventory->sum('stock_quantity');

        $config = $this->config();
        $template = 'backend.dashboard.home.index';

        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'from',
            'to',
            'totalRevenue',
            'successfulOrders',
            'cancelledOrders',
            'totalOrders',
            'successRate',
            'cancelRate',
            'averageRevenue',
            'highestOrder',
            'topProducts',
            'inventory',
            'totalStock',
            'totalRevenueByInter',
            'totalRevenueByCod'
        ));
    }

    public function inventory()
    {
        $products = Product::with('variants.attributes.attributeValue')->paginate(15);
        $template = 'backend.inventory.index';
        return view('backend.dashboard.layout', compact('template', 'products'));
    }

    public function updateStock(Request $request, ProductVariant $variant)
    {
        $request->validate([
            'stock_quantity' => 'required|integer|min:0'
        ]);

        $variant->stock_quantity = $request->stock_quantity;
        $variant->save();

        $product = $variant->product; 
        $totalStock = $product->variants->sum('stock_quantity');

        return response()->json([
            'message' => 'Cập nhật tồn kho thành công!',
            'totalStock' => $totalStock,
            'productId' => $variant->product_id,
        ]);
    }

    private function config()
    {
        return [
            'js' => [
                'backend/js/plugins/flot/jquery.flot.js',
                'backend/js/plugins/flot/jquery.flot.tooltip.min.js',
                'backend/js/plugins/flot/jquery.flot.spline.js',
                'backend/js/plugins/flot/jquery.flot.resize.js',
                'backend/js/plugins/flot/jquery.flot.pie.js',
                'backend/js/plugins/flot/jquery.flot.symbol.js',
                'backend/js/plugins/flot/jquery.flot.time.js',
                'backend/js/plugins/peity/jquery.peity.min.js',
                'backend/js/demo/peity-demo.js',
                'backend/js/inspinia.js',
                'backend/js/plugins/pace/pace.min.js',
                'backend/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                'backend/js/plugins/easypiechart/jquery.easypiechart.js',
                'backend/js/plugins/sparkline/jquery.sparkline.min.js',
                'backend/js/demo/sparkline-demo.js'
            ],
        ];
    }
}
