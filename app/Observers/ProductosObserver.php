<?php

namespace App\Observers;

use App\Http\Models\Producto;
use App\Http\Models\Bitacora;

class ProductosObserver
{
    public function created(Producto $producto)
    {
        $registro = Bitacora::create([
            'usuario' => Auth::user()->nombre,
            'acciones' => 'Creo un producto',
            'fecha' => Carbon::now(),
        ]);
    }
}
