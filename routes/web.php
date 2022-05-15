<?php

use \App\Http\Controllers\StartController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Supervisor;
use App\Http\Controllers\Encargado;
use App\Http\Controllers\Cliente;
use Illuminate\Support\Facades\Route;

# Public routes
Route::get('/', [StartController::class, 'start'])->name('start');
Route::post('/', [StartController::class, 'start'])->name('start.search');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/categorias/{categoria}/productos', [ProductosController::class, 'index'])->name('categorias.productos.index');
Route::post('/categorias/{categoria}/productos', [ProductosController::class, 'index'])->name('categorias.productos.search');
Route::get('/categorias/{categoria}', CategoriasController::class)->name('categorias.show');
Route::get('/productos/{producto}', [ProductosController::class, 'show'])->name('productos.show');

# Supervisor routes
Route::prefix('supervisor')->name('supervisor.')->middleware('auth')->group(function () {
    Route::prefix('usuarios')->name('usuarios.')->group(function () {
        Route::get('/{usuario}/historial', Supervisor\HistorialController::class)->name('historial');

        # Usuarios routes for supervisor
        Route::get('/{usuario}/delete', [Supervisor\UsuariosController::class, 'destroy'])->name('destroy');
        Route::put('/{usuario}/password', [Supervisor\UsuariosController::class, 'resetPassword'])->name('password.reset');
    });
    Route::resource('/usuarios', Supervisor\UsuariosController::class)->except('destroy');

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

Route::prefix('encargado')->name('encargado.')->middleware('auth')->group(function() {
    # Usuarios routes for supervisor
    Route::prefix('usuarios')->name('usuarios.')->group(function () {
        Route::get('/{usuario}/delete', [Encargado\UsuariosController::class, 'destroy'])->name('usuarios.destroy');
        Route::put('/{usuario}/password', [Encargado\UsuariosController::class, 'resetPassword'])->name('password.reset');
    });
    Route::resource('/usuarios', Encargado\UsuariosController::class)->except('destroy');

    # Productos for encargado
    Route::get('/productos/{producto}/delete', [Encargado\ProductosController::class, 'destroy'])->name('productos.destroy');
    Route::get('/categorias/{categoria}/productos', [Encargado\ProductosController::class, 'index'])->name('productos.index');
    Route::resource('/productos', Encargado\ProductosController::class)->except('destroy');

    # Consignaciones for encargado
    Route::get('/consignaciones/{consignacion}/delete', [Encargado\ConsignacionesController::class, 'destroy'])->name('consignaciones.destroy');
});

# Encargado routes

Route::prefix('cliente')->name('cliente.')->middleware('auth')->group(function () {
    # Compra routes for client
    Route::prefix('compras')->name('compra.')->middleware('auth')->group(function () {
        Route::get('/{producto}/create', [Cliente\ComprasController::class, 'create'])->name('create');
        Route::post('/{producto}', [Cleinte\ComprasController::class, 'store'])->name('store');
    });

    # Comentario route for client
    Route::post('/productos/{producto}/comentarios', Cliente\ComentariosController::class)->name('comentarios.store');

    # Calificacion route for client
    Route::post('/productos/{producto}/calificaciones', Cliente\CalificacionesController::class)->name('calificaciones.store');
});
