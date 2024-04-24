<?php

namespace App\Services;

use App\Models\Eventos;
use App\Models\Sessoes;
use App\Models\Equipamento;
use Carbon\Carbon;

class EventosService
{
    public function criarEvento(array $data): bool
    {
        $eventos = Eventos::create([
            'nome' => $data['nome'],
            'endereco' => $data['endereco'],
            'descricao' => $data['descricao'],
            'capacidadeMaxima' => $data['capacidadeMaxima'],
            'data' => Carbon::now()->format('Y-m-d'),
        ]);
        // dd($eventos);
        if ($eventos) {
            Sessoes::create([
                'idEvento' => $eventos->idEvento,
                'turno' => $data['turno'],
            ]);

            $tipo = is_array($data['tipo']) ? implode(',', $data['tipo']) : $data['tipo'];

            Equipamento::create([
                'idEquipeOrganizacao' => 1,
                'idEvento' => $eventos->idEvento,
                'tipo' => $tipo,
                'descricao' => 'equipamento para evento',
                'disponivel' => false
            ]);

            return true;
        }

        return false;
    }

    public function editarEvento(int $id, array $data): bool 
    {
        $eventos = Eventos::find($id);

        if(!$eventos) {
            return false;
        }

        $eventos->update([
            'nome' => $data['nome'],
            'endereco' => $data['endereco'],
            'descricao' => $data['descricao'],
            'capacidadeMaxima' => $data['capacidadeMaxima']
        ]);
        
        return true;
    }

    public function excluirEvento(int $idEvento): bool
    {
        Equipamento::where('idEvento', $idEvento)->delete();

        Sessoes::where('idEvento', $idEvento)->delete();
        
        $evento = Eventos::findOrFail($idEvento);

        if ($evento->delete()) {
            return true;
        }

        return false;
    }

}