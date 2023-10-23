<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function criarEventos(Request $request)
    {
       
        $eventos = Eventos::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'descricao' => $request->descricao,
            'capacidadeMaxima' => $request->capacidadeMaxima
        ]);

        if ($eventos) {
            return response()->json(['message' => 'Usuário criado com sucesso'], 201);
        } else {
            return response()->json(['message' => 'Erro ao criar usuário'], 500);
        }
    }
}
