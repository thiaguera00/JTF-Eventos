<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessoes extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'sessoes';
    protected $primaryKey = 'idSessao';

    protected $fillable = [
        'idEvento',
        'turno'
    ];

    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'idEvento', 'id')->onDelete('cascade');
    }
    
}
