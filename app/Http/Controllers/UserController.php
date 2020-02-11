<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'usuarios';
    }

    public function show($id){
        return 'Mostrando el detalle del usuario '.$id;
    }

    public function new(){
        return 'Crear un Nuevo Usuario';
    }

    public function edit($id){
        return 'Modificando el usuario '.$id; 
    }
}



?>