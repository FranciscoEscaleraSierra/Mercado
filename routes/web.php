<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('producto/{producto_id}', [ProductosController::class, 'show'])->name('producto');

Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');
