<?php

namespace App\Models;

//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model{

    protected $table = 'tb_clientes';

    public $timestamps = false;
    
    protected $fillable = [
        'nome', 'cpf', 'rg',
        'data_nascimento','email',
        'telefone' ,'endereco', 
    ];

    
}
