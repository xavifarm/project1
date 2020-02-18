<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articulos = [
            'prueba1',
            'prueba2',
            'prueba3',
            'prueba4',
            'prueba5'
        ];
        $title = "Listado de Artículos";

        return view('articulos.index',compact('title', 'articulos'));  
}

   /* public function show($id){
        return view('articles.show', ['id' => $id]);
}*/
}
