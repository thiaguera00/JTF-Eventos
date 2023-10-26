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
        'tipo',
        'descricao',
        'disponivel',
    ];
}
