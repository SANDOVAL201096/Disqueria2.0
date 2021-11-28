<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    
}public function index(){
    return view('Idioma.index');
}

public function create(){
    return view('Idioma.create');
}

public function show($Idioma){
    return view('Idioma.show', ['Idioma' => $Idioma]);
}
