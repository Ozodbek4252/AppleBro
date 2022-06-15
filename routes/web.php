<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\AddToCartController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\SingleProductController;
use App\Http\Controllers\Front\WishlistConrtoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\AllProductsController;
use App\Http\Livewire\AddToCart;
use App\Http\Livewire\AllProducts;
use App\Http\Livewire\Category;
use App\Http\Livewire\Favorite;
use App\Http\Livewire\Wishlist;
use App\Http\Livewire\ProductCreate;
use App\Http\Livewire\Product;
use App\Http\Livewire\Profile;
use App\Http\Livewire\History;
use App\Http\Livewire\Basket;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Admin\SingleProduct;
use App\Http\Livewire\Home;
use App\Models\Option;
use App\Models\ProductOption;
use Illuminate\Support\Facades\Auth;

// use App\Models\Category as ModelsCategory;
// use App\Models\Category as ModelsCategory;
// use App\Models\ProductOption;
// use App\Models\Option;
// use App\Models\Product as ModelsProduct;

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

Route::get('/languages/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'ru', 'uz'])) {
        session()->put('locale', $lang);
    }
    return redirect()->back();
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    // Admin Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/orders', [OrdersController::class, 'index'])->name('admin.orders');
    Route::get('/orders/{id}', [OrdersController::class, 'singleOrder'])->name('admin.orders.single-order');
    Route::get('/category', Category::class)->name('admin.category');
    Route::get('/product', Product::class)->name('admin.products');
    Route::get('/product/single-product/{id}', SingleProduct::class)->name('admin.single-product');
    Route::get('/product/create', ProductCreate::class)->name('admin.products.create');
    Route::get('/product/edit/{id}', EditProduct::class)->name('admin.product.edit');
    Route::post('/product/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::put('/product/{id}', [ProductController::class, "update"])->name('admin.products.update');
    Route::get('/banners', [BannerController::class, "index"])->name('admin.banners');
    Route::post('/banners/store', [BannerController::class, "store"])->name('admin.banner.slider');
    
    // Front Routes
    Route::get('/wishlist', Wishlist::class)->name('front.wishlist');
    Route::get('/wishlist/{id}', [WishlistController::class, 'show']);
    Route::get('/profile', Profile::class)->name('front.profile');
    Route::get('/history', History::class)->name('front.history');
    Route::get('/cart', Basket::class)->name('front.cart');
    Route::post('/cart/order', [CartController::class, 'cartOrder'])->name('basket-order-info');
    Route::get('/orders/user/{id}', [OrdersController::class, 'userOrder'])->name('user.orders');
});
Route::get('/products/{id?}', [AllProductsController::class, 'index'])->name('front.all-products');
Route::get('/single-product/{slug}', [SingleProductController::class, 'show'])->name('front.single-product');

Route::get('/cart/add/{id}', AddToCart::class);
// Route::get('/cart/add/{id}', [AddToCartController::class, 'addToCart']);
// Route::post('add_to_wishlist', [WishlistConrtoller::class, 'add'])->name('add_to_wishlist');

Route::get('wishlist_count', function(){
    $wishlist = \App\Models\Wishlist::where('user_id', Auth::id())->get();
    return $wishlist->count();
});

Route::get('cart_count', function(){
    
    $cart = session()->get('cart') ?? [];
    return count($cart);
});

Route::get('favourites/{id}/check', function ($id){
    if(\App\Models\Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->count()>0){
        return response()->json(true);
    }else{
        return response()->json(false);
    }


});



// Route::get('/test/{id}', function($id){
//     $product = \App\Models\Product::find($id)->get();
//     dd($product[0]->product_options[0]->option);
// });



// Route::get('/test/{id}', function($id){
//     $product_options = ProductOption::where('product_id', $id)->get();

//     $optionArr = [];
//     foreach($product_options as $product_option){
//         $option = Option::find($product_option->option_id);
//         $option["price"] = $product_option->price;
//         $optionArr[$option->name][] = $option;
//     }

//     return $optionArr;
// });
