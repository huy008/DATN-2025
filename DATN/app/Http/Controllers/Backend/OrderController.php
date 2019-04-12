<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Services\OrderService;
use Illuminate\Http\Request;

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
            return redirect()->route('order.index')->with('success','Xóa bản ghi thành công');
        }
        return redirect()->route('order.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
    }
}
