<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Auth\RegisterController;    
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



Route::get('/', [RegisterController::class, 'index'])->name('index');
Route::post('/', [RegisterController::class, 'store']);

Route::get('/booking', function () {
    return view('booking');
});
