<?php

use App\Http\Controllers\Front\SingleProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\AllProducts;
use App\Http\Livewire\Category;
use App\Http\Livewire\Favorite;
use App\Http\Livewire\ProductCreate;
use App\Http\Livewire\Product;
use App\Http\Livewire\Profile;
use App\Http\Livewire\History;
use App\Http\Livewire\Basket;
use App\Http\Livewire\Admin\EditProduct;


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
    Route::get('/product/edit/{id}', EditProduct::class)->name('admin.product.edit');
    Route::post('/product/{id}', [ProductController::class, "update"])->name('admin.products.update');
    Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/single-product/{id}', [SingleProductController::class, 'show'])->name('front.single-product');
    Route::get('/favorite', Favorite::class)->name('front.favorite');
    Route::get('/profile', Profile::class)->name('front.profile');
    Route::get('/history', History::class)->name('front.history');
    Route::get('/basket', Basket::class)->name('front.basket');
    Route::get('/products/{id?}', AllProducts::class)->name('front.all-products');

    // Route::resources([
    //     'categories' => 'CategoryController',
    //     // 'products' => ProductController::class,
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



 