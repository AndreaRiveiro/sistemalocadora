<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todosFilmes = Filme::all();
            return view('filme', ["todosFilmes"=>$todosFilmes]);// ou return view('filme')->whited
        }
    }

    public function criar(){
        $novoFilme = new Filme();
        $novoFilme->titulo = "Titanic";
        $novoFilme->save();
        $todosFilmes = Filme::All(); 
    }

    public function editar (Request $request, $id){ //public function editar ($id){ quando nao quero mais nenhum dado
        if($request->isMethod("GET")){
            //$ator = new Ator();
            //$atorProcurado = $ator->find(id); alinha de baixo 'e resumo das duas
            $filme = Filme::find($id);

            return view('editarFilme', ["filme"=>$filme]);
        }
        $filme = Filme::find($request->filme_id);
        $filme->titulo = $request->titulo;
        $resultado = $filme->save();

        return view("editarFilme", ["resultado"=>$resultado, "filme"=>$filme]);
    }

    public function excluir ($id){ //public function editar ($id){ quando nao quero mais nenhum dado
        $filme = Filme::find($id);
        $filme->delete();
    }
}
