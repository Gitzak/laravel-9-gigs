<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [ListingController::class, 'index']);

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', [ListingController::class, 'dashboard'])->name('dashboard');

Route::resource('listing', ListingController::class);

require __DIR__.'/auth.php';
