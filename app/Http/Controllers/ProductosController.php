<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Categoria;
use App\Models\Producto;

class ProductosController extends Controller
{

    public function index(Categoria $categoria, Request $request)
    {
        $productos = Producto::whereHas('categorias', function (Builder $query) use ($categoria) {
                $query->where('id', $categoria->id);
            })
            ->when($request->nombre, function ($productos) use ($request) {
                return $productos->where('nombre', 'like', '%'.$request->nombre.'%');
            })
            ->get();

        return view('productos.index', compact('categoria', 'productos'));
    }

    public function show(Producto $producto, Request $request)
    {
        return view('productos.show', compact('producto'));
    }
}
