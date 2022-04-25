<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function __invoke(Producto $producto, Request $request)
    {
        return view('productos', compact('producto'));
    }
}
