<?php

use App\Http\Controllers\Backend\AttributeController;
use App\Http\Controllers\Backend\AttributeValueController;

use App\Http\Controllers\Backend\ProductCatalogueController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AuthController as AdminAuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\DashboardClientController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [DashboardClientController::class, 'index'])->name('index');
Route::get('{id}/detail', [ProductController::class, 'detail'])->name('product.detail');
Route::post('/find-variant', [ProductController::class, 'findVariant'])->name('product.findVariant');

Route::post('/cart/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::group(['prefix' => 'product'], function () {
    Route::get('index', [ProductController::class, 'index'])->name('product.index');
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('{id}/edit', [ProductController::class, 'edit'])->where(['id' => '[0-9]+'])->name('product.edit');
    Route::post('{id}/update', [ProductController::class, 'update'])->where(['id' => '[0-9]+'])->name('product.update');
    Route::get('{id}/delete', [ProductController::class, 'delete'])->where(['id' => '[0-9]+'])->name('product.delete');
    Route::delete('{id}/destroy', [ProductController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('product.destroy');
});

Route::group(['prefix' => 'attribute/value'], function () {
    Route::get('index', [AttributeValueController::class, 'index'])->name('attribute.value.index');
    Route::get('create', [AttributeValueController::class, 'create'])->name('attribute.value.create');
    Route::post('store', [AttributeValueController::class, 'store'])->name('attribute.value.store');
    Route::get('{id}/edit', [AttributeValueController::class, 'edit'])->where(['id' => '[0-9]+'])->name('attribute.value.edit');
    Route::post('{id}/update', [AttributeValueController::class, 'update'])->where(['id' => '[0-9]+'])->name('attribute.value.update');
    Route::get('{id}/delete', [AttributeValueController::class, 'delete'])->where(['id' => '[0-9]+'])->name('attribute.value.delete');
    Route::delete('{id}/destroy', [AttributeValueController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('attribute.value.destroy');
});
Route::group(['prefix' => 'attribute'], function () {
    Route::get('index', [AttributeController::class, 'index'])->name('attribute.index');
    Route::get('create', [AttributeController::class, 'create'])->name('attribute.create');
    Route::post('store', [AttributeController::class, 'store'])->name('attribute.store');
    Route::get('{id}/edit', [AttributeController::class, 'edit'])->where(['id' => '[0-9]+'])->name('attribute.edit');
    Route::post('{id}/update', [AttributeController::class, 'update'])->where(['id' => '[0-9]+'])->name('attribute.update');
    Route::get('{id}/delete', [AttributeController::class, 'delete'])->where(['id' => '[0-9]+'])->name('attribute.delete');
    Route::delete('{id}/destroy', [AttributeController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('attribute.destroy');
});

Route::group(['prefix' => 'product/catalogue'], function () {
    Route::get('index', [ProductCatalogueController::class, 'index'])->name('product.catalogue.index');
    Route::get('create', [ProductCatalogueController::class, 'create'])->name('product.catalogue.create');
    Route::post('store', [ProductCatalogueController::class, 'store'])->name('product.catalogue.store');
    Route::get('{id}/edit', [ProductCatalogueController::class, 'edit'])->where(['id' => '[0-9]+'])->name('product.catalogue.edit');
    Route::post('{id}/update', [ProductCatalogueController::class, 'update'])->where(['id' => '[0-9]+'])->name('product.catalogue.update');
    Route::get('{id}/delete', [ProductCatalogueController::class, 'delete'])->where(['id' => '[0-9]+'])->name('product.catalogue.delete');
    Route::delete('{id}/destroy', [ProductCatalogueController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('product.catalogue.destroy');
});

Route::get('ajax/attribute/getAttribute', [AttributeValueController::class, 'getAttribute'])->name('ajax.attribute.getAttribute');

Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

// Route::middleware(['guest:web'])->group(
//     function () {
        Route::post('login', [AuthController::class, 'postLogin'])->name('login.post');
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('register', [AuthController::class, 'index'])->name('register');
        Route::post('register', [AuthController::class, 'register'])->name('register.post');
//     }
// );

Route::group(['prefix' => 'admin/'], function () {
    Route::get('admin', [AdminAuthController::class, 'index'])->name('auth.admin');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('auth.logout');
    Route::post('login', [AdminAuthController::class, 'login'])->name('auth.login');
});