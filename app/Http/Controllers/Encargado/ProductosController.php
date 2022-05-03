<?php

namespace App\Http\Controllers\Encargado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::get();

        return view('encargado.productos.index', compact('productos'));
    }

    public function create(Request $request)
    {
        return view('encargado.productos.create');
    }

    public function store(Request $request)
    {
        (new Producto($request))->save();

        return redirect(route('encargado.productos.show', ['producto_id' => $producto->id]));
    }

    /**
     * Este es el Kardex del producto
    **/
    public function show(Producto $producto, Request $request)
    {
        return view('encargado.productos.show', compact('producto'));
    }

    public function edit(Producto $producto, Request $request)
    {
        return view('encargado.productos.edit', compact('producto'));
    }

    public function update(Producto $producto, Request $request)
    {
        $producto->fill($request->input())->save();

        return redirect(route('encargado.productos.show', ['producto_id' => $producto->id]));
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect(route('encargado.productos.index'));
    }

    public function agregarRazon(Producto $producto, Request $request)
    {
        $comentario = new Comentario;

        $comentario->text = $request->text;
        //
        // $producto->loadCount([
        //     'producto as productos_consignados_count' => function ($producto) {
        //         $producto->consignado();
        //     }]);

        $comentario->save();
    }
}
