<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirante;
use App\Http\Requests\CreateFormularioRequest;

class ControladorCliente extends Controller
{

    public function create(){

        return view('index');
    }

    public function store(CreateFormularioRequest $request)
    {

      

           Aspirante::create( $request->validated());

           $create =request();
         return view('Confirmacion.create', [ 

            'create' => $create
         ]);
    }
    
}
