<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('doctor.login');
    }

    public function login(Request $request)
    {
        // Validación de los datos del formulario
        $credentials = $request->only('email', 'password');

        // Intenta autenticar al usuario
        if (Auth::guard('doctor')->attempt($credentials)) {
            // Si la autenticación es exitosa, redirige al área protegida
            return redirect('/doctor/dashboard');
        }

        // Si la autenticación falla, redirige de nuevo al formulario de inicio de sesión con un mensaje de error
        return redirect('/doctor/login')->with('error', 'Credenciales incorrectas');
    }
}
