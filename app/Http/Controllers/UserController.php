<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(request()->has('empty')){
            $users = [];
        }else{
            $users = [
                'Toni',
                'Xavi',
                'Miguel Angel',
                'Susana',
                'David',
                'Raúl'
            ];
        }
        //UNA MANERA DE HACERLO
        /*return view('users', [
        'users'=>$users, 
        'title'=>'Listado de Usuarios']);*/
        //OTRA MANERA DE HACERLO
        /*return view('users')->with('users', $users)
                              ->with('title', $title);*/
        //OTRA MANERA
        $title = "Listado de Usuarios";
        return view('users', compact('title','users'));
        //si queremos realizar un var_dump y die se puede comprimir esto
        /*var_dump(compact('title','users'));
        die();
        y quedaría de la siguiente manera*/
        //dd(compact('title','users'));
    }

    public function show($id){
        return view('users-show', ['id' => $id]);
    }

    public function new(){
        return 'Crear un Nuevo Usuario';
    }

    public function edit($id){
        return 'Modificando el usuario '.$id; 
    }
}



?>