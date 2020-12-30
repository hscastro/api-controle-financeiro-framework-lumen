<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Conta;

//classe responsável por controlar as ações para as rotas e para as views da api
class ContaApiController extends Controller
{


	public function create(){
		return view('create');
	}

    public function store(Request $request){  	  
    	$numero = $request->input('numero');
    	$saldo = $request->input('saldo');    	    	
    	$cliente_id = $request->input('cliente_id');             
        $novoConta = new Conta();
    	$novoConta->numero = $numero;
		$novoConta->saldo = $saldo;
        $novoConta->cliente_id = $cliente_id;					
		$novoConta->save();			
    }

    public function edit(){
		return 'Editar uma conta';
	}

    public function update(Request $request, $id){
    	$conta = Conta::find($id);
        $numero = $request->input('numero');
        $saldo = $request->input('saldo');              
        $cliente_id = $request->input('cliente_id');         
        $novoConta->numero = $numero;
        $novoConta->saldo = $saldo;
        $novoConta->cliente_id = $cliente_id;                   
        $novoConta->save();
        
        return Response()->json($conta);		
	}

    public function listar(){
    	$contas = Conta::all();
    	return Response()->json($contas);
    }


    public function findById($id){
    	$conta = Filme::find($id);
        return Response()->json($conta);
    }

    //métod para excluir uma conta
    public function deleteConta($id){
    	$conta = Filme::find($id);
    	$conta->delete();
       return Response()->json($conta);
    }
}
