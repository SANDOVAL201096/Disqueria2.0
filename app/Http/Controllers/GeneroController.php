<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){
        return view('Genero.index');
    }

    public function create(){
        return view('Genero.create');
    }

    public function show($Genero){
        return view('Genero.show', ['Genero' => $Genero]);
    }
}
