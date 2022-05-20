<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Compra;
use App\Models\Imagen;

class ComprasController extends Controller
{
    public function create(Producto $producto, Request $request)
    {
        return view('cliente.compras.create', ['producto_id' => $producto->id]);
    }

    public function store(Producto $producto, Request $request)
    {
        if ($request->pago == 0)
        {
            $compra = new Compra($request->except(['calificacion']));

            $compra->save();
        }
        elseif ($request->pago == 1)
        {
            $compra = new Compra($request->except(['calificacion']));

            $compra->save();

            $imagen = $request->file('imagen');

            $path = $imagen->store('public/images');

            $url = asset($path);

            $imagen = new Imagen([
                'url' => $url,
            ]);

            $compra->imagen()->save($imagen);

        }

        return redirect(route('producto.show', ['producto_id' => $producto->id]));
    }

    public function update(Producto $producto, Request $request)
    {
        $producto->save($request->only('calificacion'));

        return redirect(route('cliente.productos.index'));
    }
}
