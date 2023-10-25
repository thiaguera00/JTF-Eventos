<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() 
    {
       
        return Usuarios::all();
    }

    public function criarUsuario(Request $request)
    {
        $user = Usuarios::create([
            'CPF' => $request->CPF,
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        if ($user) {
            return redirect()->route('')->with('success');
        } else {
            return redirect()->route('')->with('error');
        }
    }
}
