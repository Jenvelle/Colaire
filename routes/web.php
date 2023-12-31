<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('App\Http\Middleware\Role:user')->group(function () {
    Route::controller(ClientController::class)
    ->group(function(){
        Route::get('/my-profile','viewProfile')
        ->name('view.profile');

        Route::post('/change-profile-info', 'changeProfileInfo')
        ->name('change-profile-info');

        Route::get('/delete-profile', 'deleteProfile')
        ->name('delete-profile');
    });
});
Route::controller(ClientController::class)->group(function (){
    Route::get('/','viewHomepage')
    ->name('home');
    
    Route::get('/cart-qty','cartQuantity');
    
    Route::post('/login', 'store');
    
    Route::post('/search-product', 'searchProduct' )
    ->name('search.product');

    Route::get('/product-details/{id}', 'productDetails')
    ->name('search.result');

    Route::get('/ajax/models','phoneModels');

    Route::get('/password-forgot', 'forgotPassword');   
});

Route::middleware('App\Http\Middleware\Role:admin')->group(function (){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin-dashboard', 'viewAdminDashboard')
        ->name('admin.dashboard');

        Route::get('/admin-users', 'viewAllUserAccounts')
        ->name('view.users');

        Route::get('/admin-transactions', 'viewAllTransactions')
        ->name('view.transactions');

        Route::get('/admin-products','viewAllProducts')
        ->name('view.products');

        Route::get('/admin-del-entry/{table}/{id}', 'deleteTableEntry');
    });
});


Route::middleware('auth')->group(function (){
    Route::controller(ClientController::class)->group(function(){
        Route::get('/logout', 'clientLogout')
        ->name('logout');

        Route::get('/add-to-cart/{id}/{qty}', 'addToCart');

        Route::get('/del-cart', 'deleteCart');

        Route::get('/cart', 'viewCart')
        ->name('view.cart');

      

        Route::get('/add-cart-qty/{productId}','addCartQuantity');

        Route::get('/sub-cart-qty/{productId}', 'subtractCartQuantity');

        Route::get('/del-cart-item/{productId}', 'deleteCartItem');

        Route::get('/cart-checkout', 'cartCheckout')
        ->name('cart.checkout');

        Route::post('/receipt', 'createTransaction')
        ->name('receipt');
    });
});

Route::middleware('auth')->group(function(){
    
});
require __DIR__.'/auth.php';

