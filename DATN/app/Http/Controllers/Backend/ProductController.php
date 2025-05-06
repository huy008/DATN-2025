<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Review;
use App\Repositories\AttributeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    protected $productService;
    protected $productRepository;
    protected $attributeRepository;
    protected $categoryRepository;

    public function __construct(AttributeRepository $attributeRepository, ProductService $productService, ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $this->productService = $productService;
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getByCategory($id)
    {
        $category = Category::findOrFail($id);

        $search = request('q');
        $priceRange = request('price_range');

        $query = $category->products()->with('variants');

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        if ($priceRange) {
            list($minPrice, $maxPrice) = explode('-', $priceRange);
            $query->whereHas('variants', function ($q) use ($minPrice, $maxPrice) {
                $q->whereBetween('price', [(int)$minPrice, (int)$maxPrice]);
            });
        }

        $products = $query->paginate(12);

        return view('product', compact('category', 'products'));
    }
    public function index(Request $request)
    {
        $products = $this->productService->paginate($request);
        $productCategories = $this->categoryRepository->all();
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'Product'
        ];
        $template = 'backend.product.product.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'products',
            'productCategories'
        ));
    }

    public function detail($id)
    {
        $product = Product::with(['variants.attributes.attribute', 'variants.attributes.attributeValue'])
            ->find($id);
        if ($product) {
            $attributes = $product->variants->flatMap(function ($variant) {
                return $variant->attributes->map(function ($attribute) {
                    return [
                        'attribute_name' => $attribute->attribute->name,
                        'attribute_value_id' => $attribute->attributeValue->id,
                        'attribute_value' => $attribute->attributeValue->value,
                    ];
                });
            });

            $uniqueAttributes = $attributes->unique(function ($item) {
                return $item['attribute_name'] . '-' . $item['attribute_value_id'] . '-' . $item['attribute_value'];
            });

            $groupedAttributes = [];
            foreach ($uniqueAttributes as $attribute) {
                $groupedAttributes[$attribute['attribute_name']][] = [
                    'attribute_value_id' => $attribute['attribute_value_id'],
                    'attribute_value' => $attribute['attribute_value'],
                ];
            }
            $variantImages = ProductVariant::where('product_id', $id)
                ->pluck('image_url')
                ->unique()
                ->values()
                ->toArray();

            $productVariants = $product->variants->map(function ($variant) {
                return [
                    'variant_id' => $variant->id,
                    'stock_quantity' => $variant->stock_quantity,
                ];
            });
        }

        $reviews = Review::where('product_id', $id)->get();
        $averageRating = $reviews->avg('rating'); // Tính điểm trung bình
        $reviewCount = $reviews->count(); // Số lượng đánh giá

        // Phân loại các đánh giá theo số sao
        $starRatings = [
            '5' => $reviews->where('rating', 5)->count(),
            '4' => $reviews->where('rating', 4)->count(),
            '3' => $reviews->where('rating', 3)->count(),
            '2' => $reviews->where('rating', 2)->count(),
            '1' => $reviews->where('rating', 1)->count(),
        ];

        $reviews = Review::with('user')->where('product_id', $id)->get();

        $productRelated = Product::where('category_id', $product->category_id)->limit(8)->get();
        return view('detail', compact(
            'product',
            'groupedAttributes',
            'variantImages',
            'productRelated',
            'reviews',
            'averageRating',
            'reviewCount',
            'starRatings',
            'productVariants'
        ));
    }

    public function findVariant(Request $request)
    {
        $colorId = $request->input('color_id');
        $capacityId = $request->input('capacity_id');
        $productId = $request->input('product_id');
        $variant = ProductVariant::where('product_id', $productId)
            ->whereHas('attributes', function ($query) use ($colorId, $capacityId) {
                $query->whereIn('attribute_value_id', [$colorId, $capacityId]);
            })
            ->with('attributes')
            ->get()
            ->filter(function ($variant) use ($colorId, $capacityId) {
                $attributeValueIds = $variant->attributes->pluck('attribute_value_id')->toArray();
                return in_array($colorId, $attributeValueIds) && in_array($capacityId, $attributeValueIds);
            })
            ->first();

        if ($variant) {
            $variant->final_price = $variant->final_price;
            return response()->json([
                'variant' => $variant,
            ]);
        } else {
            return response()->json([
                'error' => 'Không tìm thấy biến thể phù hợp.',
            ], 404);
        }
    }

    public function create()
    {
        $productCategories = $this->categoryRepository->all();
        $attributes = $this->attributeRepository->all();
        $config = $this->configData();
        $config['seo'] = __('messages.product');
        $config['method'] = 'create';
        $template = 'backend.product.product.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'attributes',
            'productCategories'
        ));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'base_price' => 'required|min:0',
            'description' => 'nullable|string',
            'product_catalogue_id' => 'required|exists:categories,id',
            'stock_quantity' => 'required|integer|min:0',
        ], [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'name.string' => 'Tên sản phẩm phải là chuỗi ký tự.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'base_price.required' => 'Giá sản phẩm không được để trống.',
            'base_price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'product_catalogue_id.required' => 'Danh mục sản phẩm không được để trống.',
            'product_catalogue_id.exists' => 'Danh mục sản phẩm không tồn tại.',
            'stock_quantity.required' => 'Số lượng sản phẩm không được để trống.',
            'stock_quantity.integer' => 'Số lượng sản phẩm phải là số nguyên.',
            'stock_quantity.min' => 'Số lượng sản phẩm phải lớn hơn hoặc bằng 0.',
        ]);
        if ($this->productService->create($request)) {
            return redirect()->route('product.index')->with('success', 'Thêm mới bản ghi thành công');
        }
        return redirect()->route('product.index')->with('error', 'Thêm mới bản ghi không thành công. Hãy thử lại');
    }

    public function edit($id)
    {
        $productCategories = $this->categoryRepository->all();
        $attributes = $this->attributeRepository->all();
        $product = $this->productRepository->findById($id);
        $config = $this->configData();
        $config['method'] = 'edit';
        $template = 'backend.product.product.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'product',
            'attributes',
            'productCategories'
        ));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'base_price' => 'required|min:0',
            'description' => 'nullable|string',
            'product_catalogue_id' => 'required|exists:categories,id',
            'stock_quantity' => 'required|integer|min:0',
        ], [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'name.string' => 'Tên sản phẩm phải là chuỗi ký tự.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'base_price.required' => 'Giá sản phẩm không được để trống.',
            'base_price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'product_catalogue_id.required' => 'Danh mục sản phẩm không được để trống.',
            'product_catalogue_id.exists' => 'Danh mục sản phẩm không tồn tại.',
            'stock_quantity.required' => 'Số lượng sản phẩm không được để trống.',
            'stock_quantity.integer' => 'Số lượng sản phẩm phải là số nguyên.',
            'stock_quantity.min' => 'Số lượng sản phẩm phải lớn hơn hoặc bằng 0.',
        ]);
        if ($this->productService->update($id, $request)) {
            return redirect()->route('product.index')->with('success', 'Cập nhật bản ghi thành công');
        }
        return redirect()->route('product.index')->with('error', 'Cập nhật bản ghi không thành công. Hãy thử lại');
    }

    public function delete($id)
    {
        $config['seo'] = __('messages.product');
        $product = $this->productRepository->findById($id);
        $template = 'backend.product.product.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'product',
            'config',
        ));
    }

    public function destroy($id)
    {
        if ($this->productService->destroy($id)) {
            return redirect()->route('product.index')->with('success', 'Xóa bản ghi thành công');
        }
        return redirect()->route('product.index')->with('error', 'Xóa bản ghi không thành công. Hãy thử lại');
    }

    public function ajaxSearch(Request $request)
    {
        $query = $request->input('q');

        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->take(5)
            ->get()
            ->map(function ($product) {
                return [
                    'name' => $product->name,
                    'url' => route('product.detail', $product->id),
                    'image' => asset($product->img_thumbnail),
                    'base_price' => $product->base_price ? format_currency($product->base_price) : 0,
                    'final_price' => $product->final_price ? format_currency($product->final_price) : 0,
                    'reviews_count' => $product->reviews->count(),
                    'rating_percent' => $product->average_rating,
                ];
            });

        return response()->json($products);
    }

    private function configData()
    {
        return [
            'js' => [
                'backend/plugins/ckeditor/ckeditor.js',
                'backend/plugins/ckfinder_2/ckfinder.js',
                'backend/library/finder.js',
                'backend/library/seo.js',
                'backend/library/variant.js',
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/plugins/nice-select/js/jquery.nice-select.min.js'
            ],
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
                'backend/plugins/nice-select/css/nice-select.css',
                'backend/css/plugins/switchery/switchery.css',
            ]

        ];
    }
}
