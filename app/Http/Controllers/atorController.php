<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class atorController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todosAtores = Ator::all();
            return view('ator', ["todosAtores"=>$todosAtores]);
        }
    }

    public function create(Request $request){
        if($request->isMethod("GET")){
            return view("cadastroAtor");
        }
        $novoAtor = new Ator();
        $novoAtor->primeiro_nome = $request->primeiroNome;
        $novoAtor->ultimo_nome = $request->segundoNome;
        $novoAtor->ultima_atualizacao = date("y-m-d");
        $resultado= $novoAtor->save();
        return view('cadastroAtor', ['resultado'=>$resultado]);
    }

    public function editar (Request $request, $id){ //public function editar ($id){ quando nao quero mais nenhum dado
        if($request->isMethod("GET")){
            //$ator = new Ator();
            //$atorProcurado = $ator->find(id); alinha de baixo 'e resumo das duas
            $ator = Ator::find($id);//take(30)->get();

            return view('editarAtor', ["ator"=>$ator]);
        }
        $ator = Ator::find($request->ator_id);
        $ator->primeiro_nome = $request->primeiroNome;
        $ator->ultimo_nome = $request->segundoNome;
        $resultado = $ator->save();

        return view("editarAtor", ["resultado"=>$resultado, "ator"=>$ator]);
    }
}