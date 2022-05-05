<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Usuario;

class DashboardController extends Controller
{
    public function __invoke(Usuario $usuario, Categoria $categoria, Producto $producto)
    {
        $usuarios = Usuario::get();
        $categoria = Categoria::get();
        $producto = Producto::get();
        
        return view('supervisor.dashboard', compact('usuarios', 'categoria', 'producto'));
    }
}
