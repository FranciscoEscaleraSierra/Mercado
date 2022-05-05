<?php

namespace App\Http\Controllers\Encargado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Consignacion;

class ConsignacionesController extends Controller
{
    public function destroy(Consignacion $consignacion)
    {
        $producto = $consignacion->producto;

        $consignacion->delete();

        return redirect(route('encargado.producto.show', $producto->id));
    }
}
