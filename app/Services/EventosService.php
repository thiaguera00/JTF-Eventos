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

        if ($eventos) {
            Sessoes::create([
                'idEvento' => $eventos->id,
                'turno' => $data['turno'],
            ]);

            // Transformar o array tipo em string
            $tipo = is_array($data['tipo']) ? implode(',', $data['tipo']) : $data['tipo'];

            Equipamento::create([
                'idEquipeOrganizacao' => 1,
                'idEvento' => $eventos->id,
                'tipo' => $tipo,
                'descricao' => 'equipamento para evento',
                'disponivel' => false
            ]);

            return true;
        }

        return false;
    }

}