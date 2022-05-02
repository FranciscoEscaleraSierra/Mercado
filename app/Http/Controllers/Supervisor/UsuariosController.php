<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuario::get();

        return $usuarios;
        // return view('supervisor.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('supervisor.usuarios.create');
    }

    public function store(Request $request)
    {
        (new Usuario($request->input()))->save();

        return redirect(route('supervisor.usuarios.show', ['usuario_id' => $usuario->id]));
    }

    // Muestra el Kardex del usuario
    public function show(Usuario $usuario)
    {
        return view('supervisor.usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario, Request $request)
    {
        return view('supervisor.usuarios.edit', compact('usuario'));
    }

    public function update(Usuario $usuario, Request $request)
    {
        $usuario->fill($request->except(['password']))->save();

        return redirect(route('supervisor.usuarios.show', ['usuario_id' => $usuario->id]));
    }

    public function resetPassword(Usuario $usuario, Request $request)
    {
        $usuario->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return redirect(route('supervisor.usuarios.show', ['usuario_id' => $usuario->id]));
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect(route('supervisor.usuarios.index'));
    }
}
