<?php

namespace App\Http\Controllers\Categorias;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::when($request->nombre, function ($productos) use ($request) {
            return $productos->where('nombre', 'like', '%'.$request->nombre.'%');
        })
        ->get();

        return view('productos.index', compact('productos'));
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
