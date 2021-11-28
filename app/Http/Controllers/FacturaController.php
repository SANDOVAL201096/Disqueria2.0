<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        return view('Factura.index');
    }

    public function create(){
        return view('Factura.create');
    }

    public function show($Factura){
        return view('Factura.show', ['Factura' => $Factura]);
    }
}
