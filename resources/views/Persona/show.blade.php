@extends('layouts.plantilla')

@section('title','Persona '. $Persona->nombre)

@section('content')
    <h1> {{ $Persona }} Bienvenido a la seccion Persona:{{ $persona->nombre }}</h1>
@endsection
