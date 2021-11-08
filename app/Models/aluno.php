<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricula',
        'nome',
        'situacao',
        'curso',
        'turma',
        'datamtr',
        'cep',
        'uf',
        'cidade',
        'bairro',
        'endereco',
        'complemento',
        'foto'
    ];
}
