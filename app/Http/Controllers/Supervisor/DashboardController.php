<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Resources\Supervisor\DashboardResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Usuario;
use App\Models\Compra;

class DashboardController extends Controller
{
    public function __invoke(Usuario $usuario, Categoria $categoria, Producto $producto, Compra $compra)
    {
        $usuarios = Usuario::with([
            'productos.categorias',
            'compras',
            ])
            ->get();

        return new DashboardResource($usuarios);
        // return view('supervisor.dashboard', compact('usuarios'));
    }
}
