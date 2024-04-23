<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'equipamento';
    protected $primaryKey = 'idEquipamento';
    protected $fillable = [
        'idEvento',
        'idEquipeOrganizacao',
        'tipo',
        'descricao',
        'disponivel',
    ];

    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'idEvento', 'id');
    }

    public function equipeOrganizazao()
    {
        return $this->belongsTo(EquipeOrganizacao::class, 'idEquipeOrganizacao', 'id');
    }
}
