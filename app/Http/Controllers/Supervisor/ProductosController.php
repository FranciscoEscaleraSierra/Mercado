<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Resources\Supervisor\ProductoResource;
use App\Http\Resources\Supervisor\ProductosResource;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

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
        // return view('supervisor.productos.index', compact('productos'));
    }

    /**
     * Este es el Kardex del producto
    **/
    public function show(Producto $producto, Request $request)
    {
        // return view('supervisor.productos.show', compact('producto'));
        return new ProductoResource($producto);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect(route('supervisor.productos.index'));
    }
}
