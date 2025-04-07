<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;

class LoginController extends Controller
{
    public function mostrarFormulario()
    {
        return view('login.inicio_sesion');
    }

    public function login(Request $request)
    {
        $request->validate([
            'corusuario' => 'required|email',
            'passusuario' => 'required'
        ]);

        
        $usuario = Login::where('corusuario', $request->corusuario)->first();

        if ($usuario && $usuario->passusuario === $request->passusuario) {
            Auth::login($usuario);
            
            return view('login.login_admin', ['usuario' => $usuario]);
        } else {
            session()->flash('error', 'Correo o contraseña incorrectos.');
            return back()->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login.form');
    }

    public function vistaAdmin()
    {
        $usuario = Auth::user();
        return view('login.login_admin', compact('usuario'));
    }
}

