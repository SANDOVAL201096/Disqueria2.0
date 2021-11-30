@extends('layouts.plantilla')

@section('title','Persona')

@section('content')
    <h1>Bienvenido a la seccion Persona</h1>
    <a href="{{ personas.create }}">crear persona</a>
    <a href="={{ personas.edit, $persona }}">editar persona</a>
    <ul>
        @foreach($persona as $persona)
        <li>{{$persona->nombre}}
            <a herf="{{ route(personas.show),$persona->idpersona}}">{{ $persona->nombre }}</a>
        </li>
        @endforeach
    </ul>
    {{ $personas->links }}
@endsection
