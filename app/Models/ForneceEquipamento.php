<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForneceEquipamento extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'fornece_equipamento';

    protected $fillable = [
        'id_equipamento',
        'id_equipe_organizacao'
    ];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class, 'id_equipamento', 'id');

    }

    public function equipeOrganizacao()
    {
        return $this->belongsTo(EquipeOrganizacao::class, 'id_equipe_organizacao', 'id');
    }
}
