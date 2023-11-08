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
        
        $credentials = $request->only('email', 'password');

        if (Auth::guard('doctor')->attempt($credentials)) {
            // Si la autenticación es exitosa, redirige al área protegida
            return redirect('/doctor/dashboard');
        }

        return redirect('/doctor/login')->with('error', 'Credenciales incorrectas');
    }
}
