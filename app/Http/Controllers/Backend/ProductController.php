<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
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

    public function __construct(AttributeRepository $attributeRepository, ProductService $productService, ProductRepository $productRepository,CategoryRepository $categoryRepository)
    {
        $this->productService = $productService;
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
        $this->categoryRepository = $categoryRepository;
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
            $variantImages = ProductVariant::where('product_id',$id)
                ->get('image_url')->toArray();
        }
        return view('detail', compact(
            'product',
            'groupedAttributes',
            'variantImages'
        ));
    }

    public function findVariant(Request $request)
    {
        $colorId = $request->input('color_id');
        $capacityId = $request->input('capacity_id');
        $productId = $request->input('product_id');

        $variant = ProductVariant::where('product_id', $productId)
            ->whereHas('attributes', function ($query) use ($colorId) {
                $query->where('attribute_value_id', $colorId);
            })
            ->whereHas('attributes', function ($query) use ($capacityId) {
                $query->where('attribute_value_id', $capacityId);
            })
            ->first();

        if ($variant) {
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
    // StoreProductRequest
    public function store(Request $request)
    {
        if ($this->productService->create($request)) {
            return redirect()->route('product.index')->with('success', 'Thêm mới bản ghi thành công');
        }
        return redirect()->route('product.index')->with('error', 'Thêm mới bản ghi không thành công. Hãy thử lại');
    }

    public function edit($id)
    {
        $attributes = $this->attributeRepository->all();
        $product = $this->productRepository->findById($id);
        $config = $this->configData();
        $config['method'] = 'edit';
        $template = 'backend.product.product.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'product',
            'attributes'
        ));
    }

    public function update($id, Request $request)
    {
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
