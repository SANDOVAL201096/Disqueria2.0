<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index(){
        return view('Tema.index');
    }

    public function create(){
        return view('Tema.create');
    }

    public function show($Tema){
        return view('Tema.show', ['Tema' => $Tema]);
    }
}
