@extends('layouts.plantilla')

@section('title','edit Persona')

@section('content')
    <h1>En esta seccion podras editar un Persona</h1>
    <form action="{{ route('personas.update',$persona)}}"method="POST">
     @csrf
     @method('put')
    <label for="">
            Id Persona:
            <input type="text" name ="idpersona"value="{{ old ('idpersona', $persona->idpersona )}}">
</label>
<br>
<label>
<label for="">
            nombre:
            <input type="text" name ="nombre"value="{{old('nombre', $nombre->nombre) }}">>
</label>
<br>
<label for="">
            apellido:
            <input type="text" name ="apellido"value="{{old('apellido', $apellido->apellido )}}">>
</label>
<br>
<label for="">
            cedula:
            <input type="number" name ="cedula"value="{{old('cedula', $cedula->cedula )}}">>
</label>
<br>
<label for="">
            celular:
            <input type="number" name ="celular"value="{{old('celular', $celular->celular )}}">>
</label>
<br>
<button type="submit">ACTUALIZAR</button>
</form>

@endsection
