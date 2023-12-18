<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\Controller;

/*
|-----------------------------------------------------      ---------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', [Controller::class, 'dashboard'])->name('dashboard');
    Route::resource('barangs', BarangController::class);
    Route::resource('pegawais', PegawaiController::class);
    Route::resource('pinjamans', PinjamanController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
