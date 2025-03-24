<?php

use App\Http\Controllers\Backend\AttributeController;
use App\Http\Controllers\Backend\AttributeValueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

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

Route::get('/test', function () {
    return view('test');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/detail', [ProductController::class, 'detail'])->name('product.detail');
Route::post('/find-variant', [ProductController::class, 'findVariant'])->name('product.findVariant');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});

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

Route::get('ajax/attribute/getAttribute', [AttributeValueController::class, 'getAttribute'])->name('ajax.attribute.getAttribute');
