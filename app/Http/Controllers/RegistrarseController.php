<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('signup');
    }

    public function store()
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = Usuario::create(request(['nombre', 'email', 'password']));

        auth()->login($usuario);

        return redirect()->route('/games');
    }
}
