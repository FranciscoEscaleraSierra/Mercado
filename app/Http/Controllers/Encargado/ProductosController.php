<?php

namespace App\Http\Controllers\Encargado;

use App\Http\Controllers\Controller;
use App\Http\Resources\Encargado\ProductoResource;
use App\Http\Resources\Encargado\ProductosResource;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductosController extends Controller
{
    public function index(Categoria $categoria, Request $request)
    {
        $productos = Producto::with('categorias')->deCategoria($categoria)
            ->when($request->nombre, function ($productos) use ($request) {
                return $productos->where('nombre', 'like', '%'.$request->nombre.'%');
            })
            ->get();

        return ProductosResource::collection($productos);
        // return view('encargado.productos.index', compact('productos'));
    }

    public function create(Request $request)
    {
        return view('encargado.productos.create');
    }

    public function store(Request $request)
    {
        $producto = (new Producto($request->input()));

        $producto->save();

        $consignacion = $producto->consignacion()->firstOrCreate();

        return redirect(route('encargado.productos.show', compact('producto', 'consignacion')));
    }

    /**
     * Este es el Kardex del producto
    **/
    public function show(Producto $producto, Request $request)
    {
        return new ProductoResource($producto);
        // return view('encargado.productos.show', compact('producto'));
    }

    public function edit(Producto $producto, Request $request)
    {
        return view('encargado.productos.edit', compact('producto'));
    }

    public function update(Producto $producto, Request $request)
    {
        $producto->fill($request->input('producto'))->save();

        $consignacion = $producto->consignacion;

        if ($request->input('consignacion.autorizado'))
        {
            $consignacion->autorizado = Carbon::now();

            $producto->precio = $producto->precio * 1.05;
            $producto->save();
        }

        $consignacion->razon = $request->input('consignacion.razon');

        $consignacion->save();

        return redirect(route('encargado.productos.show', compact('producto')));
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect(route('encargado.productos.index'));
    }
}
