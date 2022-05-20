<?php

namespace App\Http\Controllers\Encargado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Consignacion;
use Illuminate\Support\Facades\Auth;

class ConsignacionesController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            return Auth::user()->is_encargado ? $next($request) : abort(403);
        });
    }

    public function destroy(Consignacion $consignacion)
    {
        $producto = $consignacion->producto;

        $consignacion->delete();

        return redirect(route('encargado.producto.show', $producto->id));
    }
}
