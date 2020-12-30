<?php

namespace App\Models;

//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Conta extends Model{

    protected $table = 'tb_contas';

    public $timestamps = false;
    
    protected $fillable = [
        'numero', 'saldo', 'cliente_id', 
    ];

    
}
