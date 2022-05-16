<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentariosPreguntasController extends Controller
{
    public function __invoke(Producto $producto, Request $request)
    {
        $pregtuna = (new Comentario($request->input()));

        $producto->comentarios()->save($pregtuna);

        return redirect(route('productos.show', ['producto' => $producto->id]));
    }
}
