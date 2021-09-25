<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
class FilmesController extends Controller
{
    public function create(){
        return view('Filmes.create');
    }

    public function store(Request $request){
        Filme::create([
                'titulo' =>$request->titulo,
                'diretor' =>$request->diretor,
                'genero' =>$request->genero,
                'duracao' =>$request->duracao,
                'lancamento' =>$request->lancamento,
                'preco' =>$request->preco,
                'sinopse' =>$request->sinopse,

        ]);
    return "Filme Salvo com Sucesso";
    }

}
