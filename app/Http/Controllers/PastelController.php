<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index(){
        $pasteles = ['pasteles' => \App\Pastel::all()];
            return view('pasteles.index', $pasteles);  
    }

    public function show($id){
        return view('pasteles.show', ['id' => $id]);
    }

}
