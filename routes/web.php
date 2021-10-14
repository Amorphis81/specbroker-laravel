<?php

use App\Http\Controllers\BuyBusinessController;
use App\Http\Controllers\MainPageController;
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

//Route::get('/', function () {
//    return view('home.index');
//});

//Route::view('/', 'pages.home.index')->name('home');
Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::view('/sell', 'pages.sell.index')->name('sell');
//Route::view('/buy', 'pages.buy.index')->name('buy');
Route::get('/buy', [BuyBusinessController::class, 'index'])->name('buy');
Route::view('/single', 'pages.single-business.index')->name('single');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
