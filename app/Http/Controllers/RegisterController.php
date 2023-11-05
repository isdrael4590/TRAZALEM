<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Funcion
    public function showRegistrationForm()
    {
        return view("auth.register");
    }

    // Funcion para registrar usuarios
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = User::create([
            "full_name"=> $request->full_name,
            "username"=> $request->username,
            "password"=> $request->password,
        ]);
        return redirect("login");
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
