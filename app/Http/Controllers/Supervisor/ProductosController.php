<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::get();

        return view('supervisor.productos.index', compact('productos'));
    }

    public function create(Request $request)
    {
        return view('supervisor.productos.create');
    }

    public function store(Request $request)
    {
        (new Producto($request))->save();

        return redirect(route('supervisor.productos.show', ['producto_id' => $producto->id]));
    }

    /**
     * Este es el Kardex del producto
    **/
    public function show(Producto $producto, Request $request)
    {
        return view('supervisor.productos.show', compact('producto'));
    }

    public function edit(Producto $producto, Request $request)
    {
        return view('supervisor.productos.edit', compact('producto'));
    }

    public function update(Producto $producto, Request $request)
    {
        $producto->fill($request->input())->save();

        return redirect(route('supervisor.productos.show', ['producto_id' => $producto->id]));
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect(route('supervisor.productos.index'));
    }
}
