<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuario::get();

        return view('usuarios.index', compact('usuarios'));
    }

    public function create(Request $request)
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        (new Usuario($request))->save();

        return redirect(route('usuarios.show', ['usuario_id' => $usuario->id]));
    }

    public function show(Usuario $usuario, Request $request)
    {
        return view('usuarios.show', compact('usuario'));
    }
}
