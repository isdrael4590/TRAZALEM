<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Funcion para retornar la
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Funcion que verifica si el usuario ha sido correctamente ingresado
    public function login(Request $request)
    {
        // Validar la entrada de datos
        $request->validate([
            "username" => 'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('username', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Mostrar el Index si es que el usuario se autenticó correctamente
            return view('index');
        }
            // Authentication failed
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }


}
