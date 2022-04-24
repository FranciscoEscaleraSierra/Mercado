<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::when($request->nombre, function ($categoria) use ($request) {
            return $categoria->where('nombre', 'like', '%'.$request->nombre.'%')
                ->orWhereHas('productos', function ($productos) {
                    $productos->where('nombre', 'like', '%'.$request->nombre.'%');
                });
        })
        ->get();

        return view('categorias.index', compact('categorias'));
    }

    public function create(Request $request)
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        (new Producto($request))->save();

        return redirect(route('productos.show', ['producto_id' => $producto->id]));
    }

    public function show(Producto $producto, Request $request)
    {
        return view('productos.show', compact('producto'));
    }
}
