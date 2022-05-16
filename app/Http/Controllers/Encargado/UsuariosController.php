<?php

namespace App\Http\Controllers\Encargado;

use App\Http\Controllers\Controller;
use App\Http\Resources\Encargado\UsuarioResource;
use App\Http\Resources\Encargado\UsuariosCollection;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuario::get();

        return new UsuariosCollection($usuarios);
        // return view('encargado.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('encargado.usuarios.create');
    }

    public function store(Request $request)
    {
        $usuario = (new Usuario($request->input()));

        $usuario->save();

        return redirect(route('encargado.usuarios.show', compact('usuario')));
    }

    public function show(Usuario $usuario)
    {
        return new UsuarioResource($usuario);
        // return view('encargado.usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario, Request $request)
    {
        return view('encargado.usuarios.edit', compact('usuario'));
    }

    public function update(Usuario $usuario, Request $request)
    {
        $usuario->fill($request->except(['password']))->save();

        return redirect(route('encargado.usuarios.show', compact('usuario')));
    }

    public function resetPassword(Usuario $usuario, Request $request)
    {
        $usuario->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return redirect(route('encargado.usuarios.show', ['usuario_id' => $usuario->id]));
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect(route('encargado.usuarios.index'));
    }
}
