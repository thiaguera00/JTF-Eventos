<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcessoAoSistema extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'acesso_sistema';

    protected $fillable = [
        'login',
        'senha'
    ];
}
