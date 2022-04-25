<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function __invoke(Categoria $categoria, Request $request)
    {
        return view('categorias', compact('categoria'));
    }
}
