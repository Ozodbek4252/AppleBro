<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\BannerController;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SingleProductController;
use App\Http\Controllers\Front\AllProductsController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\AddToCartController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Front\WishlistConrtoller;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\HistoryController;


use App\Http\Livewire\Admin\SingleProduct;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Product;
use App\Http\Livewire\ProductCreate;
use App\Http\Livewire\AddToCart;
use App\Http\Livewire\Category;
use App\Http\Livewire\Wishlist;
use App\Http\Livewire\Profile;
use App\Http\Livewire\History;
use App\Http\Livewire\Basket;
use App\Http\Livewire\Favorite;
use App\Http\Livewire\AllProducts;
use App\Http\Livewire\Home;

use App\Models\Option;
use App\Models\ProductOption;

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
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::name('admin.')->group(function (){
            Route::get('/users', [UsersController::class, 'index'])->name('users');
            Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
            Route::get('/orders/{id}', [OrdersController::class, 'singleOrder'])->name('orders.single-order');
            Route::get('/category', Category::class)->name('category');
            Route::get('/product', Product::class)->name('products');
            Route::get('/product/single-product/{id}', SingleProduct::class)->name('single-product');
            Route::get('/product/create', ProductCreate::class)->name('products.create');
            Route::get('/product/edit/{id}', EditProduct::class)->name('product.edit');
            Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');
            Route::put('/product/{id}', [ProductController::class, "update"])->name('products.update');
            Route::controller(BannerController::class)->group(function () {
                Route::prefix('banners')->group(function () {
                    Route::get('/', "index")->name('banners.index');
                    Route::get('/create', "create")->name('banners.create');
                    Route::post('/store', "store")->name('banner.slider');
                    Route::post('/store_mid/store', "store_mid")->name('banner.middle');
                    Route::post('/small/store', "small")->name('banner.small');

                    Route::get('/slider/edit/{banner}', "slider_edit")->name('banner.slider.edit');
                    Route::put('/slider/update', "slider_update")->name('banner.slider.update');
                    Route::get('/slider/delete/{banner}', "slider_delete")->name('banner.slider.delete');
                    
                    Route::get('/mid/edit/{banner}', "mid_edit")->name('banner.mid.edit');
                    Route::put('/mid/update', "mid_update")->name('banner.mid.update');
                    Route::get('/mid/delete/{banner}', "mid_delete")->name('banner.mid.delete');
                    
                    Route::get('/small/edit/{banner}', "small_edit")->name('banner.small.edit');

                });
            });
        });
    });

    // Front Routes
    Route::get('/wishlist', Wishlist::class)->name('front.wishlist');
    Route::get('/wishlist/{id}', [WishlistController::class, 'show']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('front.profile');
    Route::post('/profile', [ProfileController::class, 'store'])->name('front.profile.store');
    Route::get('/history', History::class)->name('front.history');
    Route::get('/profile/history', [HistoryController::class, 'index'])->name('profile.history');
    Route::post('/cart/order', [CartController::class, 'cartOrder'])->name('basket-order-info');
    Route::get('/orders/user/{id}', [OrdersController::class, 'userOrder'])->name('user.orders');
});

Route::get('/cart', Basket::class)->name('front.cart');
Route::get('/messages/create', [MessageController::class, 'create']);
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






