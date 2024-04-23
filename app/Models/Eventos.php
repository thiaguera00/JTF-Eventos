<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'eventos';
    protected $primaryKey = 'idEvento';
    protected $fillable = [
        'nome',
        'endereco',
        'descricao',
        'capacidadeMaxima'
    ];
}
