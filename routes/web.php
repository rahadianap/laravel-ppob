<?php

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
//     return view('auth/login');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pricelist/pra', [App\Http\Controllers\App\PricelistController::class, 'indexPra'])->name('pricelist_pra');
Route::get('/pricelist/pasca', [App\Http\Controllers\App\PricelistController::class, 'indexPasca'])->name('pricelist_pasca');
Route::get('/search', [App\Http\Controllers\App\PricelistController::class, 'index'])->name('search');
// Route::get('/pricelist', function() {
//     $result = collect($collection)->paginate(10);
//     return view('app\pricelist', compact("result"));
// });
