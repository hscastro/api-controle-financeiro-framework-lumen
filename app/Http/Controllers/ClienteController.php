<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cliente;

//classe responsável por controlar as ações para as rotas e para as views da api
class ClienteController extends Controller
{


	public function create(){
		return view('cliente/create');
	}

    //método para adicionar um novo cliente
    public function store(Request $request){  	  
    	$nome = $request->input('nome');
    	$cpf = $request->input('cpf');    	    	
    	$rg = $request->input('rg');             
        $dataNascimento = $request->input('dataNascimento');

        $novoCliente = new Cliente();
    	$novoCliente->nome = $nome;
		$novoCliente->cpf = $cpf;
        $novoCliente->rg = $rg;					
		$novoCliente->dataNascimento = $dataNascimento;
        $novoCliente->save();			
    }

    public function edit(){
		return 'Editar uma conta';
	}

    //método para atualizar/editar um cliente pelo id
    public function update(Request $request, $id){
    	$cliente = Cliente::find($id);
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');              
        $rg = $request->input('rg');             
        $dataNascimento = $request->input('dataNascimento');

        $cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->rg = $rg;                 
        $cliente->dataNascimento = $dataNascimento;
        $cliente->save();
        
        return Response()->json($cliente);		
	}

    //método para listar clientes
    public function listar(){
    	$clientes = Cliente::all();
    	return Response()->json($clientes);
    }

    //método para buscar um cliente pelo id
    public function findById($id){
    	$cliente = Cliente::find($id);
        return Response()->json($cliente);
    }

    //método para excluir um cliente pelo id
    public function deleteConta($id){
    	$cliente = Cliente::find($id);
    	$cliente->delete();
       return Response()->json($cliente);
    }
}
