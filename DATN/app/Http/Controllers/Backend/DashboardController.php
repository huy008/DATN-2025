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
    public function __construct(){

    }

    public function index(Request $request){
        $from = $request->from ?? Carbon::now()->startOfMonth()->toDateString();
        $to = $request->to ?? Carbon::now()->endOfMonth()->toDateString();

        $orders = Order::whereBetween('created_at', [$from, $to])->get();

        $totalRevenue = $orders->where('status', 'completed')->sum('total_price');
        $successfulOrders = $orders->where('status', 'completed')->count();
        $cancelledOrders = $orders->where('status', 'cancelled')->count();

        $topProducts = OrderItem::select('product_id', DB::raw('SUM(quantity) as total_sold'), DB::raw(' SUM(quantity * price) as total_revenue'))
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
            'topProducts',
            'inventory',
            'totalStock'
        ));
    }
    
    private function config(){
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
