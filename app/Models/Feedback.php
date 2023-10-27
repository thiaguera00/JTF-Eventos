<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    public $timestamps = false;

    protected $fillable = [
        'id_evento',
        'nota',
        'comentario'
    ];
    
    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'id_evento', 'id');
    }

}
