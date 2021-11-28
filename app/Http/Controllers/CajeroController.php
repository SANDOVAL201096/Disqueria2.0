<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CajeroController extends Controller
{
    public function index(){
        return view('Cajero.index');
    }

    public function create(){
        return view('Cajero.create');
    }

    public function show($Cajero){
        return view('Cajero.show', ['Cajero' => $Cajero]);
    }
}
