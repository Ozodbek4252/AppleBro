<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Category;
use App\Http\Livewire\ProductCreate;
use App\Http\Livewire\Product;
use Illuminate\Support\Facades\Route;


use App\Models\ProductOption;
use App\Models\Option;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/category', Category::class)->name('admin.category');
    Route::get('/product', Product::class)->name('admin.products');
    Route::get('/product/create', ProductCreate::class)->name('admin.products.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');

    // Route::resources([
        // 'categories' => 'CategoryController',
        // 'products' => ProductController::class,
    // ]);
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test/{id}', function($id){
    $product_options = ProductOption::where('product_id', $id)->get();

    $optionArr = [];
    foreach($product_options as $product_option){
        $option = Option::find($product_option->option_id);
        $option["price"] = $product_option->price;
        $optionArr[$option->name][] = $option;
    }

    return $optionArr;
});



