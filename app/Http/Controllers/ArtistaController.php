<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index(){
        return view('Artista.index');
    }

    public function create(){
        return view('Artista.create');
    }

    public function show($Artista){
        return view('Artista.show', ['Artista' => $Artista]);
    }
}
