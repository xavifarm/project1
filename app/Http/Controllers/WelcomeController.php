<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello($name, $nickname=null){
        if($nickname){
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        }else{
            return "Bienvenido {$name}, no tienes apodo";
        }
    }
}
