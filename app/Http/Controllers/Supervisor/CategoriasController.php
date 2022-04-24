<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::when($request->nombre, function ($categoria) use ($request) {
            return $categoria->where('nombre', 'like', '%'.$request->nombre.'%')
                ->orWhereHas('productos', function ($productos) {
                    $productos->where('nombre', 'like', '%'.$request->nombre.'%');
                });
        })
        ->withCount('productos')
        ->get();

        return view('supervisor.categorias.index', compact('categorias'));
    }

    public function create(Request $request)
    {
        return view('supervisor.categorias.create');
    }

    public function store(Request $request)
    {
        (new Categoria($request->input()))->save();

        return redirect(route('supervisor.categorias.index'));
    }

    public function edit(Categoria $categoria, Request $request)
    {
        return view('supervisor.categorias.edit')->with('producto', $producto);
    }

    public function update(Categoria $categoria, Request $request)
    {
        $categoria->save($request);

        return redirect(route('supervisor.categorias.index'));
    }

    public function destroy(Categoria $categoria, Request $request)
    {
        $categoria->delete();

        return redirect(route('supervisor.categorias.index'));
    }

}
