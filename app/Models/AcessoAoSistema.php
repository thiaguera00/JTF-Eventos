<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcessoAoSistema extends Authenticatable 
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'acesso_sistema';
    protected $primaryKey = 'idAcessoSistema';

    protected $fillable = [
        'login',
        'senha'
    ];

    protected $password = 'senha';
}
