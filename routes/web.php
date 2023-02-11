<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [IndexController::class, 'index'])->middleware('auth')->name('index');

Route::get('/login', function() {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
