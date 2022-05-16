<?php

namespace App\Http\Controllers\Contador;

use App\Http\Resources\Contador\CompraResource;
use App\Http\Resources\Contador\ComprasCollection;
use App\Http\Controllers\Controller;
use App\Models\Compra;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index(Request $request)
    {
        $compras = Compra::get();

        return new ComprasCollection($compras);
        // return view('contador.compras.index', compact('compras'));
    }

    public function show(Compra $producto, Request $request)
    {
        return new CompraResource($producto);
        // return view('cliente.compra.show', compact('producto'));
    }

    public function store(Request $request)
    {
        (new Compra($request->input()))->save();

        return redirect(route('contador.compra.show', ['compra' => $compra->id]));
    }

    public function update(Usuario $usuario, Request $request)
    {
        $usuario->fill($request->only(['valida']))->save();

        return redirect(route('supervisor.usuarios.show', ['usuario_id' => $usuario->id]));
    }
}
