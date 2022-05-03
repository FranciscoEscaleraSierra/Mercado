<?php

use \App\Http\Controllers\StartController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Supervisor;
use App\Http\Controllers\Encargado;
use Illuminate\Support\Facades\Route;

# Public routes

Route::get('/', [StartController::class, 'start'])->name('start');
Route::post('/', [StartController::class, 'start'])->name('start.search');
Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');

Route::get('/categorias/{categoria}/productos', [ProductosController::class, 'index'])->name('categorias.productos.index');
Route::post('/categorias/{categoria}/productos', [ProductosController::class, 'index'])->name('categorias.productos.search');
Route::get('/productos/{producto}', [ProductosController::class, 'show'])->name('productos.show');
Route::get('/categorias/{categoria}', CategoriasController::class)->name('categorias.show');

# Resourse routes for categoria productos

# Supervisor routes
Route::prefix('supervisor')->name('supervisor.')->group(function () {
    Route::prefix('usuarios')->name('usuarios.')->group(function () {
        Route::get('/{usuario}/historial', Supervisor\HistorialController::class)->name('historial');

        # Usuarios routes for supervisor
        Route::get('/{usuario}/delete', [Supervisor\UsuariosController::class, 'destroy'])->name('destroy');
        Route::put('/{usuario}/password', [Supervisor\UsuariosController::class, 'resetPassword'])->name('password.reset');
        Route::resource('/', Supervisor\UsuariosController::class);
    });

    # Categorias routes for supervisor
    Route::get('/categorias/{categoria}/delete', [Supervisor\CategoriasController::class, 'destroy'])->name('categorias.destroy');
    Route::resource('/categorias', Supervisor\CategoriasController::class)->except('destroy');

    # Productos routes for supervisor
    Route::get('/productos/{producto}/delete', [Supervisor\ProductosController::class, 'destroy'])->name('productos.destroy');
    Route::resource('/productos', Supervisor\ProductosController::class)->except('destroy');

    # Dashboard route
    Route::get('/dashboard', Supervisor\DashboardController::class)->name('dashboard');
});

# Encargado routes

Route::prefix('encargado')->name('encargado')->group(function() {
    # Usuarios routes for supervisor
    Route::prefix('usuarios')->name('usuarios.')->group(function () {
        Route::get('/{usuario}/delete', [Encargado\UsuariosController::class, 'destroy'])->name('usuarios.destroy');
        Route::put('/{usuario}/password', [Encargado\UsuariosController::class, 'resetPassword'])->name('password.reset');
        Route::resource('/', Encargado\UsuariosController::class)->except('destroy');
    });

    # Productos for supervisor
    Route::get('/productos/{producto}/delete', [Encargado\ProductosController::class, 'destroy'])->name('productos.destroy');
    Route::resource('/productos', Encargado\ProductosController::class)->except('destroy');
});
