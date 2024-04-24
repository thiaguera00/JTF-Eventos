<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Services\EventosService;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    protected $eventosService;

    public function __construct(EventosService $eventosService)
    {
        $this->eventosService = $eventosService;
    }

    public function visualizarEvento(int $idEvento)
    {
        $eventos = Eventos::find($idEvento);

        if ($eventos) {
            return view('detalhesEventos', ['eventos' => $eventos]);
        }

        return abort(404);

    }

    public function editarEventoForm(int $idEvento)
    {
        $eventos = Eventos::find($idEvento);

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
        $data = $request->only([
            'nome', 
            'endereco', 
            'descricao', 
            'capacidadeMaxima', 
            'turno', 
            'tipo'
        ]);
        
        if ($this->eventosService->criarEvento($data)) {
            return redirect()->route('eventos');
        } else {
            return redirect()->back()->withErrors(['error' => 'Credenciais fornecidas incorretas']);
        }
    }

    public function editarEvento(Request $request, int $id)
    {
        $data = $request->only([
            'nome',
            'endereco',
            'descricao',
            'capacidadeMaxima',
        ]);
    
        $result = $this->eventosService->editarEvento($id, $data);
    
        if ($result) {    
            return redirect()->route('eventos');
        } else {
            return redirect()->back()->withErrors(['error' => 'Evento não encontrado']);
        }
    }

    public function excluirEvento(int $id)
    {
        $result = $this->eventosService->excluirEvento($id);
        
        if ($result) {
            return redirect()->route('eventos');
        } else {
            return redirect()->back()->withErrors(['error' => 'Evento não encontrado']);
        }
    }
}
