<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(){
        return view('Persona.index');
    }

    public function create(){
        return view('Persona.create');
    }

    public function show($Persona){
        return view('Persona.show', ['Persona' => $Persona]);
    }
}
