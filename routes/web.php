<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FilterController;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', ]
    ], function()
{


    Route::get('/api/attribute', [ProductController::class, 'getAll']);
    Route::get('/api/attribute/{id}', [ProductController::class, 'show']);

    Route::get('priceFilter', [ProductController::class, 'searchProduct'])->name('priceFilter');
    Route::get('brand/filter', [ProductController::class, 'searchProduct'])->name('brand.filter');

    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('product/{id}', [ProductController::class, 'getProduct'])->name('getProduct');
    Route::post('product/search', [ProductController::class, 'searchProduct'])->name('search');
    Route::get('currency/{currency}', [ProductController::class, 'currencyEdit'])->name('currency.edit');
    Route::get('locale/{locale}', [AccountController::class, 'changeLocale'])->name('locale');

    Route::get('checkout', [OrderController::class, 'checkout'])->name('checkout')->middleware('auth');
    Route::post('checkout/store', [OrderController::class, 'orderStore'])->name('order.store');

    Route::post('review/store/{id}', [ReviewController::class, 'reviewStore'])->name('review.store');
    Route::get('review/delete/{id}', [ReviewController::class, 'reviewDelete'])->name('review.delete');

    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('paginateQuantity', [CartController::class, 'paginateQuantity'])->name('paginate.quantity');
    Route::post('add-to-cart', [CartController::class, 'addCart'])->name('add.to.cart');
    Route::post('add-delete-cart', [CartController::class, 'deleteCart'])->name('delete.cart');
    Route::post('edit.quantity', [CartController::class, 'editQuantity'])->name('edit.quantity');

    Route::get('shop-list/{id}', [CategoryController::class, 'getShopList'])->name('getShopList');

    Route::get('about-us', [AccountController::class, 'aboutUs'])->name('aboutUs');
    Route::get('contact-us', [AccountController::class, 'contactUs'])->name('contactUs');
    Route::post('contact-us/store', [AccountController::class, 'feedbackStore'])->name('feedback.store');


    Route::get('terms-and-conditions', [AccountController::class, 'termsAndConditions'])->name('terms-and-conditions');

    Route::get('account-login', [AccountController::class, 'login'])->name('b-shop.login');
    Route::get('account-profile', [UserController::class, 'profile'])->name('account.profile')->middleware('auth');
    Route::get('account-addresses', [UserController::class, 'addressShow'])->name('account.addresses')->middleware('auth');
    Route::get('account-dashboard', [UserController::class, 'accountDashboard'])->name('account.dashboard')->middleware('auth');
    Route::post('account-profile', [UserController::class, 'userProfileStore'])->name('user.profile.store')->middleware('auth');
    Route::get('account-orders', [OrderController::class, 'accountOrder'])->name('account.order.history')->middleware('auth');
    Route::get('account-order-details/{id}', [OrderController::class, 'accountOrderDetails'])->name('account.order.details')->middleware('auth');
    Route::get('account-order-success', [OrderController::class, 'orderSuccess'])->name('account.order.success')->middleware('auth');
    Route::get('account-edit-address', [UserController::class, 'accountEditAddress'])->name('account.edit.address')->middleware('auth');
    Route::get('account-address-destroy', [UserController::class, 'accountAddressDestroy'])->name('account.address.destroy')->middleware('auth');
    Route::get('account-password', [UserController::class, 'accountPasswordEdit'])->name('account.password')->middleware('auth');
    Route::post('account-password-reset', [UserController::class, 'accountPasswordReset'])->name('account.password.reset')->middleware('auth');
    Route::post('account-avatar-upload', [UserController::class, 'avatarUpload'])->name('account.avatar.upload')->middleware('auth');
    Route::post('account-addresses-store', [UserController::class, 'addressStore'])->name('account.address.store');
    Route::post('account-subscribe-create', [SubscribeController::class, 'subscribeCreate'])->name('account.subscribe.create');
    Route::get('404', function () {
        return view('black-shop.404');
    });

    Route::get('wishlist', function () {
        return view('black-shop.wishlist');
    });

    Route::get('blog-class', function () {
        return view('black-shop.account-profile');
    });
    Route::get('blog-grid', function () {
        return view('black-shop.blog-grid');
    });
    Route::get('blog-left-sidebar', function () {
        return view('black-shop.blog-left-sidebar');
    });
    Route::get('blog-list', function () {
        return view('black-shop.blog-list');
    });
    Route::get('cart-empty', function () {
        return view('black-shop.cart-empty');
    });
    Route::get('components', function () {
        return view('black-shop.components');
    });

    Route::get('contact-us-alt', function () {
        return view('black-shop.contact-us-alt');
    });
    Route::get('faq', function () {
        return view('black-shop.faq');
    });
    Route::get('offcanvas-cart', function () {
        return view('black-shop.offcanvas-cart');
    });
    Route::get('post', function () {
        return view('black-shop.post');
    });
    Route::get('post-without-sidebar', function () {
        return view('black-shop.post-without-sidebar');
    });

    Route::get('product-alt', function () {
        return view('black-shop.product-alt');
    });
    Route::get('quickview', function () {
        return view('black-shop.quickview');
    });
    Route::get('shop-grid-3-columns-sidebar', function () {
        return view('black-shop.shop-grid-3-columns-sidebar');
    });


    Route::get('track-order', function () {
        return view('black-shop.track-order');
    });

    Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('account.logout');
});
Route::prefix('b-shop')->group(function () {

});



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
