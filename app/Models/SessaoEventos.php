<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessaoEventos extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'sessao_eventos';

    protected $fillable = [
        'id_eventos',
        'id_sessao',
        'horario'
    ];

    public function eventos()
    {
        return $this->belongsTo(Eventos::class, 'id_eventos', 'id');
    }

    public function sessoes()
    {
        return $this->belongsTo(Sessoes::class, 'id_sessao', 'id');

    }
}
