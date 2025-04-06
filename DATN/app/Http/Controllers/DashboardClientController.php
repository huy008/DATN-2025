<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Repositories\AttributeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Services\ProductService;
use Illuminate\Http\Request;

class DashboardClientController extends Controller
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

    public function index()
    {
       $products = Product::limit(10)->get();
        $categories = Category::withCount('products')->get();
        return view('dashboard', compact(
            'products',
            'categories'
        ));
    }
}
