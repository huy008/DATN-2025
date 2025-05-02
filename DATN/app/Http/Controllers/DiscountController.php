<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Repositories\DiscountRepository;
use App\Services\DiscountService;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    protected $discountService;
    protected $discountRepository;

    public function __construct(
        DiscountService $discountService,
        DiscountRepository $discountRepository,
    ) {
        $this->discountService = $discountService;
        $this->discountRepository = $discountRepository;
    }
    public function index(Request $request)
    {
        $discounts = $this->discountService->paginate($request);
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [],
        ];
        $template = 'backend.discounts.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'discounts'
        ));
    }

    public function create()
    {
        $products = Product::all();
        $variants = ProductVariant::all();
        $template = 'backend.discounts.store';
        $config['method'] = 'create';
        return view('backend.dashboard.layout', compact(
            'template',
            'products',
            'variants',
            'config'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',  // Tên chương trình giảm giá là bắt buộc
            'description' => 'nullable|string',  // Mô tả không bắt buộc
            'start_date' => 'required|date|after_or_equal:today',  // Ngày bắt đầu là bắt buộc và phải là ngày hợp lệ
            'end_date' => 'required|date|after:start_date',  // Ngày kết thúc phải là ngày hợp lệ và sau ngày bắt đầu
            'type' => 'required|in:percentage,fixed',  // Loại giảm giá phải là phần trăm hoặc số tiền cố định
            'value' => 'required|numeric|min:0',  // Giá trị giảm giá phải là số và không nhỏ hơn 0
            'products' => 'required|array|min:1',  // Phải chọn ít nhất một sản phẩm
            'products.*' => 'exists:products,id',  // Các sản phẩm phải tồn tại trong bảng sản phẩm
        ], [
            'name.required' => 'Tên chương trình giảm giá là bắt buộc.',
            'start_date.required' => 'Ngày bắt đầu là bắt buộc.',
            'end_date.required' => 'Ngày kết thúc là bắt buộc.',
            'type.required' => 'Loại giảm giá là bắt buộc.',
            'value.required' => 'Giá trị giảm giá là bắt buộc.',
            'products.required' => 'Phải chọn ít nhất một sản phẩm.',
        ]);

        // Tạo discount
        $discount = Discount::create($validated);

        // Áp dụng cho các sản phẩm đã chọn (bao gồm cả sản phẩm không có biến thể)
        if (isset($validated['products'])) {
            $discount->products()->attach($validated['products']); // Gắn sản phẩm chính vào discount

            // Áp dụng cho tất cả các variants thuộc product
            $variants = ProductVariant::whereIn('product_id', $validated['products'])->pluck('id')->toArray();
            if (!empty($variants)) {
                $discount->variants()->attach($variants); // Gắn biến thể vào discount
            }
        }

        return redirect()->route('discounts.index')->with('success', 'Discount created successfully');
    }

    public function edit(Discount $discount)
    {
        $products = Product::all();
        $variants = ProductVariant::all();
        $selectedProducts = $discount->products->pluck('id')->toArray();
        $selectedVariants = $discount->variants->pluck('id')->toArray();
        $template = 'backend.discounts.store';
        $config['method'] = 'edit';
        return view('backend.dashboard.layout', compact('discount', 'template', 'products', 'variants', 'selectedProducts', 'selectedVariants', 'config'));
    }

    public function update(Request $request, Discount $discount)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',  // Tên chương trình giảm giá là bắt buộc
            'description' => 'nullable|string',  // Mô tả không bắt buộc
            'start_date' => 'required|date|after_or_equal:today',  // Ngày bắt đầu là bắt buộc và phải là ngày hợp lệ
            'end_date' => 'required|date|after:start_date',  // Ngày kết thúc phải là ngày hợp lệ và sau ngày bắt đầu
            'type' => 'required|in:percentage,fixed',  // Loại giảm giá phải là phần trăm hoặc số tiền cố định
            'value' => 'required|numeric|min:0',  // Giá trị giảm giá phải là số và không nhỏ hơn 0
            'products' => 'required|array|min:1',  // Phải chọn ít nhất một sản phẩm
            'products.*' => 'exists:products,id',  // Các sản phẩm phải tồn tại trong bảng sản phẩm
        ], [
            'name.required' => 'Tên chương trình giảm giá là bắt buộc.',
            'start_date.required' => 'Ngày bắt đầu là bắt buộc.',
            'end_date.required' => 'Ngày kết thúc là bắt buộc.',
            'type.required' => 'Loại giảm giá là bắt buộc.',
            'value.required' => 'Giá trị giảm giá là bắt buộc.',
            'products.required' => 'Phải chọn ít nhất một sản phẩm.',
        ]);

        // Cập nhật discount
        $discount->update($validated);

        // Cập nhật sản phẩm (bao gồm cả sản phẩm không có biến thể)
        $discount->products()->sync($validated['products'] ?? []);

        // Cập nhật biến thể (nếu có)
        $variants = [];
        if (!empty($validated['products'])) {
            $variants = ProductVariant::whereIn('product_id', $validated['products'])->pluck('id')->toArray();
        }

        $discount->variants()->sync($variants);

        return redirect()->route('discounts.index')->with('success', 'Discount updated successfully');
    }

    public function destroy(Discount $discount)
    {
        // Xóa mối quan hệ với sản phẩm và biến thể
        $discount->products()->detach();
        $discount->variants()->detach();
        $discount->delete();

        return redirect()->route('discounts.index')->with('success', 'Discount deleted successfully');
    }
}
