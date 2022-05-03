<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class StartController extends Controller
{
    public function start(Request $request)
    {
        $categorias = Categoria::when($request->nombre, function ($categoria) use ($request) {
            return $categoria->where('nombre', 'like', '%'.$request->nombre.'%')
                ->orWhereHas('productos', function ($productos) use ($request) {
                    $productos->where('nombre', 'like', '%'.$request->nombre.'%');
                });
        })
        ->get();

        $productos = Producto::when($request->categoria_id, function($producto) {
          $producto->whereHas('categorias', function ($categoria) {
            $categoria->where('id', request('categoria_id'));
          });
        })
        ->when($request->nombre, function ($productos) use ($request) {
            return $productos->where('nombre', 'like', '%'.$request->nombre.'%');
        })
        ->latest()
        ->get();

        return view('start', compact('categorias', 'productos'));
    }
}
