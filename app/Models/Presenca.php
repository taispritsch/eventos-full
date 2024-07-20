<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    use HasFactory;

    protected $table = 'presencas'; 

    protected $fillable = [
        'inscricao_id',
        'data_presenca',
    ];
}
