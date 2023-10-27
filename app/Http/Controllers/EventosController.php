<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{

    public function listarEventos()
    {
        return Eventos::all()->get;
    }
    public function criarEventos(Request $request)
    {
       $request->validate([
        'nome' => 'required',
        'endereco' => 'required',
        'descricao' => 'required',
        'capacidadeMaxima' => 'required',
       ]);

        $eventos = Eventos::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'descricao' => $request->descricao,
            'capacidadeMaxima' => $request->capacidadeMaxima
        ]);

        if ($eventos) {
            return redirect()->route('eventos');
        } else {
            return redirect()->back()->withErrors(['error' => 'Credencias fornecidas incorretas']);
        }
    }

    public function editarEvento(int $id, Request $request)
    {
        $alteracoes = [ 
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'descricao' => $request->descricao,
            'capacidadeMaxima' => $request->capacidadeMaxima
        ];
        
        $eventos = Eventos::find($id);

        if ($eventos) {
            $eventos->update($alteracoes);

            return redirect()->route('eventos');
        } else {
            return redirect()->back()->withErrors(['error'=> 'Alteracoes não foi feitas']);
        } 
    }

    public function excluirEvento(Request $request)
    {
      Eventos::destroy($request->id);

      return redirect()->route('eventos');
    }
}
