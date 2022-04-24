<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::get();

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
