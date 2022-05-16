<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentariosRespuestasController extends Controller
{
    public function __invoke(Comentario $comentario, Request $request)
    {
        $respuesta = (new Comentario($request->input()));

        $comentario->comentarios()->save($respuesta);

        return redirect(route('productos.show', ['producto' => $comentario->producto->id]));
    }
}
