<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Supervisor;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

# Public routes

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/', [HomeController::class, 'home'])->name('home.search');
Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');

Route::get('/categorias/{categoria}/productos', [ProductosController::class, 'index'])->name('categorias.productos.index');
Route::post('/categorias/{categoria}/productos', [ProductosController::class, 'index'])->name('categorias.productos.search');
Route::get('/productos/{producto}', [ProductosController::class, 'show'])->name('productos.show');
Route::get('/categorias/{categoria}', CategoriasController::class)->name('categorias.show');

# Resourse routes for categoria productos

# Supervisor routes
Route::prefix('supervisor')->name('supervisor.')->group(function () {
    # Usuarios routes for supervisor
    Route::get('/usuarios/{usuario}/delete', [Supervisor\CategoriasController::class, 'destroy'])->name('usuarios.destroy');
    Route::put('/usuarios/{usuario}/password', [Supervisor\CategoriasController::class, 'resetPassword'])->name('usuarios.password.reset');
    Route::resource('/usuarios', Supervisor\UsuariosController::class);

    # Categorias routes for supervisor
    Route::get('/categorias/{categoria}/delete', [Supervisor\CategoriasController::class, 'destroy'])->name('categorias.destroy');
    Route::resource('/categorias', Supervisor\CategoriasController::class)->except('destroy');

    # Productos routes for supervisor
    Route::get('/productos/{producto}/delete', [Supervisor\CategoriasController::class, 'destroy'])->name('productos.destroy');
    Route::resource('/productos', Supervisor\CategoriasController::class)->except('destroy');


    Route::get('/dashboard', Supervisor\DashboardController::class)->name('dashboard');
});
