<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/sendEmail', [UserController::class, 'send_email'])->name('mail');
Route::get('/product', [UserController::class, 'product'])->name('product');
Route::get('/market', [UserController::class, 'market'])->name('market');
Route::get('/detail_product/{id}', [UserController::class, 'detail_product'])->name('detailProduct');

// admin
Route::prefix('dashboard')->middleware(['auth'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // carousel
    Route::resource('/carousel', CarouselController::class);
    // product
    Route::resource('/product', ProductController::class);        
    // image
    Route::resource('/image', ImageController::class);        
    // market
    Route::resource('/market', MarketController::class);        
    // teams
    Route::resource('/team', TeamController::class);        
    // admin
    Route::resource('/admin', AdminController::class);        
    
});


Auth::routes();

