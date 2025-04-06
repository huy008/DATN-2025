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
        // $discounts = Discount::with(['products', 'variants'])->get();
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:fixed,percentage',
            'value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'products' => 'nullable|array',
            'products.*' => 'exists:products,id',
            'variants' => 'nullable|array',
            'variants.*' => 'exists:product_variants,id',
        ]);

        $discount = Discount::create($validated);

        if (isset($validated['products'])) {
            $discount->products()->attach($validated['products']);
        }

        if (isset($validated['variants'])) {
            $discount->variants()->attach($validated['variants']);
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:fixed,percentage',
            'value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'products' => 'nullable|array',
            'products.*' => 'exists:products,id',
            'variants' => 'nullable|array',
            'variants.*' => 'exists:product_variants,id',
        ]);

        $discount->update($validated);

        $discount->products()->sync($validated['products'] ?? []);
        $discount->variants()->sync($validated['variants'] ?? []);

        return redirect()->route('discounts.index')->with('success', 'Discount updated successfully');
    }

    public function destroy(Discount $discount)
    {
        $discount->products()->detach();
        $discount->variants()->detach();
        $discount->delete();

        return redirect()->route('discounts.index')->with('success', 'Discount deleted successfully');
    }
}
