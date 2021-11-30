@extends('layouts.plantilla')

@section('title','Crear Persona')

@section('content')
    <h1>En esta seccion podras agregar un Persona</h1>
    <form action="{{ route('personas.store')}}"method="POST">
     @csrf
    <label for="">
            Id Persona:
            <input type="text" name ="idpersona" value="{{ old('idpersona') }}">
</label>
<br>
<label>
<label for="">
            nombre:
            <input type="text" name ="nombre"value="{{ old('nombre') }}">
</label>
<br>
@error('nombre')
<br>
<small>*{{ $message }}</small>
<br>
@enderror
<br>
<label for="">
            apellido:
            <input type="text" name ="apellido"value="{{ old('apellido') }}">
</label>
<br>
<label for="">
            cedula:
            <input type="number" name ="cedula"value="{{ old('cedula') }}">
</label>
<br>
<label for="">
            celular:
            <input type="number" name ="celular"value="{{ old('celular') }}">
</label>
<br>
<button type="submit">REGISTRAR</button>
</form>

@endsection
