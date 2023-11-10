<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    /** Variavel para criar/atulizar os campos via Eloquent */
    protected $fillable = [
        'name',
        'cpf',
        'contact'
    ];

    /** Variavel para ocultar campo do model nos retornos */
    protected $hidden = [];
}
