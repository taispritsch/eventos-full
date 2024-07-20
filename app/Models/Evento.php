<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos'; 
    protected $fillable = [
        'nome', 'data', 'hora',
    ];

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }
}
