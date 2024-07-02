<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'contrasena' => 'required|min:4',
            'nombre' => 'required|string|max:255',
        ]);

        // Si la validación falla, redirecciona de nuevo al formulario de registro
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput()
                             ->with('error', 'Por favor corrige los errores en el formulario.');
        }

        // Crear nuevo usuario si la validación es exitosa
        $user = new User();
        $user->email = $request->input('email');
        $user->contrasena = Hash::make($request->input('contrasena'));
        $user->nombre = $request->input('nombre');
        $user->save();

        // Redireccionar al formulario de inicio de sesión con un mensaje de éxito
        return redirect()->route('login')->with('success', 'Usuario creado con éxito. ¡Ahora puedes iniciar sesión!');
    }
}
