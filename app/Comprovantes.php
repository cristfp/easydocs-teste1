<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprovantes extends Model
{
    public $timestamps = false;
    protected $guarded =[];
    protected $fillable = ['nome',
    'sobrenome',
    'email',
    'rua',
    'bairro',
    'numero',
    'complemento',
    'cidade',
    'estado',
    'status',
    'observacoes',
    'imagem']; 
    
}
