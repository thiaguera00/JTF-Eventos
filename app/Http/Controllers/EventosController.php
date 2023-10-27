<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function visualizarEvento(int $id)
    {
        $eventos = Eventos::find($id);

        if ($eventos) {
            return view('detalhesEventos', ['eventos' => $eventos]);
        }

        return abort(404);

    }

    public function editarEventoForm(int $id)
    {
        $eventos = Eventos::find($id);

        if ($eventos) {
            return view('editarEventos', ['eventos' => $eventos]);
        }

        return abort(404);
    }

    public function listarEventos()
    {
        $eventos = Eventos::all();

        return view('eventos', ['eventos' => $eventos]);
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

    public function editarEvento(Request $request, int $id)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'descricao' => 'required',
            'capacidadeMaxima' => 'required',
        ]);
    
        $eventos = Eventos::find($id);
    
        if ($eventos) {
            $eventos->update([
                'nome' => $request->nome,
                'endereco' => $request->endereco,
                'descricao' => $request->descricao,
                'capacidadeMaxima' => $request->capacidadeMaxima
            ]);
    
            return redirect()->route('eventos');
        } else {
            return redirect()->back()->withErrors(['error' => 'Evento não encontrado']);
        }
    }

    public function excluirEvento(Request $request)
    {
      Eventos::destroy($request->id);

      return redirect()->route('eventos');
    }
}
