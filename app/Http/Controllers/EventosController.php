<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Eventos;
use App\Models\Sessoes;
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
        try {
            Equipamento::where('idEvento', $request->idEvento)->delete();

            Sessoes::where('idEvento', $request->idEvento)->delete();
            
            $evento = Eventos::findOrFail($request->idEvento);
            
            if ($evento->delete()) {
                return redirect()->route('eventos')->with('success', 'Evento excluído com sucesso.');
            }

            return redirect()->route('eventos')->with('error', 'Erro ao excluir o evento.');
        } catch (\Exception $e) {
            return redirect()->route('eventos')->with('error', 'Erro ao excluir o evento: ' . $e->getMessage());
        }
    }

}
