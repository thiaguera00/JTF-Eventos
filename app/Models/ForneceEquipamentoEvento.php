<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForneceEquipamentoEvento extends Model
{
    use HasFactory;

    protected $table = 'fornece_equipamento_evento';

    protected $fillable = [
        'id_equipamento',
        'id_eventos',
        'data'
    ];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class, 'id_equipamento', 'id');

    }

    public function eventos()
    {
        return $this->belongsTo(Eventos::class, 'id_eventos', 'id');
    }
}
