<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Resources\Cliente\ProductoResource;
use App\Http\Resources\Cliente\ProductosCollection;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $usuario = Auth::user();

        switch (true) {
            case $request->input('comprados') == 1:
                $productos = $usuario->productos()->comprados()->get();
            break;

            case $request->input('consigando') == 1:
                $productos = $usuario->productos()->consignado()->get();
            break;

            default:
                $productos = $usuario->productos;
            break;
        }

        return new ProductosCollection($productos);
        // return view('productos.index', compact('productos'));
    }


    public function create(Request $request)
    {
        return view('encargado.productos.create');
    }

    public function store(Request $request)
    {
        $producto = (new Producto($request->input()));

        if ($producto->save())
        {
            $imagen = $request->file('imagen');

            $path = $imagen->store('public/images');

            $url = asset($path);

            $imagen = new Imagen([
                'url' => $url,
            ]);

            $producto->imagen()->save($imagen);

            $consignacion = $producto->consignacion()->firstOrCreate();
        }

        return redirect(route('encargado.productos.show', compact('producto', 'consignacion')));
    }

    public function show(Producto $producto, Request $request)
    {
        return new ProductoResource($producto);
        // return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto, Request $request)
    {
        return view('cliente.productos.edit')->with('producto', $producto);
    }

    public function update(Producto $producto, Request $request)
    {
        if ($producto->consignacion->autorizado == null)
        {
            $producto->save($request->input());
        }

        return redirect(route('cliente.productos.index'));
    }

    public function destroy(Producto $producto)
    {
        if ($producto->consignacion->autorizado == null)
        {
            $producto->imagen->delete();

            $producto->delete();
        }

        return redirect(route('cliente.productos.index'));
    }
}
