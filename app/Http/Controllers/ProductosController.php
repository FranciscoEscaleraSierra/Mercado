<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function show(Request $request)
    {
      $producto = Producto::find($request->producto_id);

      return view('producto', compact('producto'));
    }
}
