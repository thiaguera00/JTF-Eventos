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
            return response()->json(['message' => 'Usuário criado com sucesso'], 201);
        } else {
            return response()->json(['message' => 'Erro ao criar usuário'], 500);
        }
    }
}
