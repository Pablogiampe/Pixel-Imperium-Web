<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {   
        
        $credentials = $request->only('email', 'contrasena');
        
        // Obtener el usuario por email
        $user = User::where('email', $credentials['email'])->first();
        
        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($credentials['contrasena'], $user->contrasena)) {
            // Redirigir al usuario administrador al ABM de productos
             if ($user->rol == 1) {

                Session::put('user', $user);

                return redirect()->route('productos.abm');

            }

            // Redirigir al inicio
            return redirect()->route('inicio');
        } else {
            return redirect()->back()->with('error', 'Correo electrónico o contraseña incorrectos');
        }
    }
}
