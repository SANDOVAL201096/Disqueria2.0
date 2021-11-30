<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::ordeBy('id','desc')->paginate();

        return view('Persona.index');
    }

    public function create(){
        return view('Persona.create');
    }
    public function store(request $request){
        $request->validate([
        'idpersona'=>'required',
        'nombre'=>'required',
        'apellido'=>'required',
        'cedula'=>'required',
        'celular'=>'required'
        ]);

        $persona = new Persona();

        $persona->idpersona= $request->persona;
        $persona->nombre= $request->nombre;
        $persona->apellido= $request->apellido;
        $persona->cedula= $request->cedula;
        $persona->celular= $request->celular;
        $persona-> save();
        return redirect()->route('personas.show', $persona);
    }
    public function show(Persona $persona){

        
        return view('personas.show', compact('persona'));
    }
    public function edit(Persona $persona){
        return view('personas.edit', compact('persona'));
    }
    public function update(request $request, Persona $persona){
        $request->validate([
            'idpersona'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'cedula'=>'required',
            'celular'=>'required'
            ]);
        $persona->idpersona= $request->persona;
        $persona->nombre= $request->nombre;
        $persona->apellido= $request->apellido;
        $persona->cedula= $request->cedula;
        $persona->celular= $request->celular;
        $persona-> save();
        return redirect()->route('personas.show', $persona);
}
}