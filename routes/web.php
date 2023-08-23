<?php

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

Route::middleware('auth')->group(function () {
    Route::controller(ClientController::class)
    ->group(function(){
        Route::get('/logout', 'clientLogout')
        ->name('logout');

        Route::get('/my-profile','viewProfile')
        ->name('view.profile');

        Route::post('/change-profile-info', 'changeProfileInfo')
        ->name('change-profile-info');

        Route::get('/delete-profile', 'deleteProfile')
        ->name('delete-profile');

        Route::get('/add-to-cart/{id}/{qty}', 'addToCart');

        Route::get('/del-cart', 'deleteCart');

        Route::get('/cart', 'viewCart')
        ->name('view.cart');

        Route::get('/cart-qty','cartQuantity');

        Route::get('/add-cart-qty/{productId}','addCartQuantity');

        Route::get('/sub-cart-qty/{productId}', 'subtractCartQuantity');

        Route::get('/del-cart-item/{productId}', 'deleteCartItem');

        Route::get('/cart-checkout', 'cartCheckout')
        ->name('cart.checkout');

        Route::post('/receipt', 'createTransaction')
        ->name('receipt');

    });
});
Route::controller(ClientController::class)->group(function (){
    Route::get('/','viewHomepage')
    ->name('home');
    
    Route::post('/login', 'store');
    
    Route::post('/search-product', 'searchProduct' )
    ->name('search.product');

    Route::get('/product-details/{id}', 'productDetails')
    ->name('search.result');

    Route::get('/ajax/models','phoneModels');

    Route::get('/password-forgot', 'forgotPassword');

    



   
});

require __DIR__.'/auth.php';
