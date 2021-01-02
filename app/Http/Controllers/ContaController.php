<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Conta;

//classe responsável por controlar as ações para as rotas e para as views da api
class ContaController extends Controller
{


	public function create(){
		return view('conta/create');
	}

    //método para adicionar uma conta
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

    //método para atualizar/editar uma conta pelo id
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

    //método para listar contas
    public function listar(){
    	$contas = Conta::all();
    	return Response()->json($contas);
    }

    //método para buscar uma conta pelo id
    public function findById($id){
    	$conta = Conta::find($id);
        return Response()->json($conta);
    }

    //método para excluir uma conta pelo id
    public function deleteConta($id){
    	$conta = Conta::find($id);
    	$conta->delete();
       return Response()->json($conta);
    }
}
