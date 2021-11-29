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
        $persona = new Persona();

        $persona->idpersona= $request->persona;
        $persona->nombre= $request->nombre;
        $persona->apellido= $request->apellido;
        $persona->cedula= $request->cedula;
        $persona->celular= $request->celular;
        $persona-> save();
        return redirect()->route('personas.show');
    }
    public function show($id){
        $persona = persona::find($id);
        return view('personas.show', compact('persona'));
    }
}
