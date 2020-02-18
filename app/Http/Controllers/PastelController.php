<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index(){
            $pasteles = [
                'Tarta de queso',
                'Tiramisú',
                'Panna Cotta',
                'Arroz con leche',
                'Tarta de 3 chocolates'
            ];
            return view('pasteles.index')->with('pasteles', $pasteles );  
    }

    public function show($id){
        return view('pasteles.show', ['id' => $id]);
    }

}
