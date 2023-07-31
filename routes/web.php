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

  

   
});

require __DIR__.'/auth.php';
