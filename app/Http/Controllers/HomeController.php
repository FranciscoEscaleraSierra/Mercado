<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class HomeController extends Controller
{
    public function home()
    {
        $categorias = Categoria::all();

        $productos = Producto::when(request('categoria_id'), function($query) {
          $query->where('categoria_id', request('categoria_id'));
        })
        ->latest()
        ->get();

        return view('index', compact('categorias', 'productos'));
    }
}
