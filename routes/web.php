<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Supervisor;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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
Route::post('/', [HomeController::class, 'home'])->name('home.search');

Route::resource('categorias', CategoriasController::class)
    ->only(['index', 'show', 'create', 'store']);

Route::resource('categorias.productos', ProductosController::class)
    ->only(['index', 'show', 'create', 'store']);

Route::prefix('supervisor')->name('supervisor.')->group(function () {
    Route::get('/dashboard', Supervisor\DashboardController::class)->name('dashboard');

    Route::get('/categorias/{categoria}/delete', [Supervisor\CategoriasController::class, 'destroy'])->name('categorias.destroy');
    Route::resource('/categorias', Supervisor\CategoriasController::class)->except('destroy');
});

Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');
