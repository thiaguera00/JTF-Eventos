<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessoes extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'sessoes';

    protected $fillable = [
        'id_evento',
        'turno'
    ];

    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'id_evento', 'id');
    }
}
