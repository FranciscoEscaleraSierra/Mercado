<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Compra;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function __invoke(Producto $producto, Compra $compra, Request $request)
    {
        $compra->save($request);

        return redirect(route('productos.show', ['producto' => $producto->id]));
    }
}
