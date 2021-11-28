<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index(){
        return view('Detalle.index');
    }

    public function create(){
        return view('Detalle.create');
    }

    public function show($Detalle){
        return view('Detalle.show', ['Detalle' => $Detalle]);
    }  
}
