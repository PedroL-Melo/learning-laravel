<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alimentos;
use Illuminate\Database\QueryException;
use Exception;


class alimentosController extends Controller
{
    //CRUD - Create, Read, Update, Delete - criar, ler, atualizar, deletar
    
    public function ListarAlimentos(){
        try {
            $alimentos = alimentos::all();
            return response()->json($alimentos);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao listar alimentos: ',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function criarAlimento(Request $request){
        try {
            $request->validate([
                'nomeAlimento' => 'required|string|max:100',
                'tipoAlimento' => 'required|string|max:50',
                'quantidade' => 'required|integer'
            ]);
            $alimento = Alimentos::create($request->all());
            return response()->json([
                'message' => 'Alimento criado com sucesso!',
                'data' => $alimento
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao criar alimento: ',
                'error' => $e->getMessage()
            ], 500);
        }

    }

    public function atualizarAlimento(){
         try {
            
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao atualizar alimento: ',
                'error' => $e->getMessage()
            ], 500);
        }

    }
    
    public function deletarAlimento(){
         try {
            
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao deletar alimento: ',
                'error' => $e->getMessage()
            ], 500);
        }
       
    }

    
    
}
