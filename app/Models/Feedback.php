<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    protected $primaryKey = 'idFeedback';

    public $timestamps = false;

    protected $fillable = [
        'idEvento',
        'nota',
        'comentario'
    ];
    
    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'idEvento', 'id');
    }

}
