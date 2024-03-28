<?php

use Illuminate\Support\Facades\Route;
// For Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserPatternController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Artist\ArtistDashboardController;
use App\Http\Controllers\Artist\ArtistProductController;
use App\Http\Controllers\Artist\ArtistOrderController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\StripePaymentController;




// For User
use App\Http\Controllers\User\UserController as UController;

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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();






Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {

   route::get('login','user_login')->name('login')->middleware('guest');
   route::post('loginAdminProcess','loginAdminProcess')->name('loginAdminProcess') ;

   route::get('user-register','userRegister')->name('user-register')->middleware('guest');
   route::post('user-register-process','RegisterProcess')->name('user-register-process');

   Route::get('forgot-password', 'forgotPasswords')->name('forgot-password');
   Route::post('forgotPassword', 'forgotPassword')->name('forgotPassword');
   Route::post('updatePassword', 'updatePassword')->name('updatePassword');
   route::get('resetpassword/{id}','resetpassword')->name('resetpassword');

});

 Route::controller(CartController::class)->group(function () {
    Route::get('cart','cartList')->name('cart.list');
    Route::post('cart','addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear',  'clearAllCart')->name('cart.clear');

 });

 Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});



Route::middleware(['auth','can:isAdmin'])->prefix('admin')->group(function()
{
    Route::resource('users', UserController::class);
    Route::resource('userspattern', UserPatternController::class);
    Route::get('user-change-status', [UserController::class,'change_status'])->name('admin-user-change-status');
    Route::controller(AdminController::class)->group(function ()
    {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('profile', 'profile')->name('admin.profile');
        route::post('profile-update','profileUpdate')->name('profile-update');
    });

    Route::resource('setting', SettingController::class);
    Route::resource('blog', BlogController::class);

});




 Route::middleware(['auth','can:isUser'])->prefix('artist')->group(function(){

    Route::controller(ArtistDashboardController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('artist.dashboard');
        Route::get('profile', 'profile')->name('artist.profile');
        route::post('profile-update','profileUpdate')->name('artist.profile-update');

     });
     Route::resource('product', ArtistProductController::class);
     Route::resource('order', ArtistOrderController::class);
});

Route::get('/home', [App\Http\Controllers\Front\HomeController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('about');
Route::get('/activity', [App\Http\Controllers\Front\HomeController::class, 'activity'])->name('activity');
Route::get('/spotlight', [App\Http\Controllers\Front\HomeController::class, 'spotlight'])->name('spotlight');
Route::get('/vault', [App\Http\Controllers\Front\HomeController::class, 'vault'])->name('vault');
Route::get('single-blog/{id}', [App\Http\Controllers\Front\HomeController::class, 'singleBlog'])->name('single.blog');
Route::get('checkout', [App\Http\Controllers\Front\HomeController::class, 'checkout'])->name('checkout');
Route::get('/shop', [App\Http\Controllers\Front\HomeController::class, 'shop'])->name('shop');
Route::get('/search-artist', [App\Http\Controllers\Front\HomeController::class, 'searchArtist'])->name('search.artist');

Route::get('logout', [App\Http\Controllers\Front\HomeController::class, 'logout'])->name('logout');
