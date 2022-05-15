<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ComprasController extends Controller
{
    public function create(Request $request)
    {
        if ($request->get('pago'))
        {
            return view('cliente.create');
        }

    }

    public function store(Request $request)
    {
        (new Producto($request))->save();

        return redirect(route('producto.show', ['producto_id' => $producto->id]));
    }
}
