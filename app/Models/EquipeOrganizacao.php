<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipeOrganizacao extends Model
{
    use HasFactory;

    protected $table = 'equipe_organizacao';

    protected $fillable = [
        'id_usuario',
        'informacoes_contato',
        'funcoes',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario', 'id');
    }
}
