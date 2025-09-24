<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class SingUpController extends Controller
{
    //

     //Show form
    public function showForm(){
        return view('auth.singUp');
    }

    public function registrer(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:8',
            'rol' => 'required|in:admin,empleado,cliente', // only one of those 3 values
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'tipo_de_negocio' => 'nullable|string|max:100',
            'informacion_adicional' => 'nullable|string|max:1000',
        ]);
        
        
        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email'); 
        $usuario->password = Hash::make($request->input('password'));
        $usuario->rol = $request->input('rol');
        $usuario->telefono = $request->input('telefono');
        $usuario->direccion = $request->input('direccion');
        $usuario->tipo_de_negocio = $request->input('tipo_de_negocio');
        $usuario->informacion_adicional = $request->input('informacion_adicional');
        $usuario->save();
         
        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión.');
    }
}

