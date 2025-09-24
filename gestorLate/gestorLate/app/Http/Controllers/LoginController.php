<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LoginController extends Controller
{
    //Show the form
    public function loginForm(){
        return view('auth.login');
    }

    
   public function login(Request $request){
    
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            $user = Auth::user();

            //  Custom redirection based on role
            switch ($user->rol) {
                case 'admin':
                    return redirect()->route('inicio');

                case 'empleado':
                    return redirect()->route('pedidos.index');

                default:
                    Auth::logout(); // For security, log out if you do not have a valid role
                    return redirect()->route('login')->withErrors([
                        'email' => 'Rol de usuario no autorizado.',
                    ]);
            }
        } else {
            // Login error
            $error = 'Usuario o contraseña incorrectos';
            return view('auth.login', compact('error'));
        }
    }


    


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    

}
