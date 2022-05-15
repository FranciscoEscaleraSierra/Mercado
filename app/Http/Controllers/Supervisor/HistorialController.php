<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Resources\Supervisor\HistorialResource;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Usuario $usuario, Request $request)
    {
        $usuario->loadCount([
            'compras',
            'ventas',
            'productos as productos_consignados_count' => function ($productos) {
                $productos->consignado();
            },
            'productos as productos_comprados_count' => function ($productos) {
                $productos->comprados();
            },
            'productos as productos_existentes_count' => function ($productos) {
                $productos->existencias();
            },
        ]);

        return new HistorialResource($usuario);
        // return view('supervisor.usuarios.historial', compact('usuario'));
    }
}
