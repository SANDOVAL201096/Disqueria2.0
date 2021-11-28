<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisqueriaController extends Controller
{
    public function index(){
        return view('Disqueria.index');
    }

    public function create(){
        return view('Disqueria.create');
    }

    public function show($Disqueria){
        return view('Disqueria.show', ['Disqueria' => $Disqueria]);
    }
}
