<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'equipamento';

    protected $fillable = [
        'id_evento',
        'id_equipe_organizacao',
        'tipo',
        'descricao',
        'disponivel',
    ];

    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'id_evento', 'id');
    }

    public function equipeOrganizazao()
    {
        return $this->belongsTo(EquipeOrganizacao::class, 'id_equipe_organizacao', 'id');
    }
}
