<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Resources\Supervisor\CategoriaResource;
use App\Http\Resources\Supervisor\CategoriasCollection;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriasController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            return Auth::user()->is_supervisor ? $next($request) : abort(403);
        });
    }

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

        return new CategoriasCollection($categorias);
        // return view('supervisor.categorias.index', compact('categorias'));
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

    public function show(Categoria $categoria)
    {
        return new CategoriaResource($categoria);
        // return view('supervisor.categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria, Request $request)
    {
        return view('supervisor.categorias.edit')->with('categoria', $categoria);
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
