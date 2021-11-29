extends('layouts.plantilla')

section('title','Crear Persona')

section('content')
    <h1>En esta seccion podras agregar un Persona</h1>
    <form action="{{ route('persona.store')}}"method="POST">
     @csrf
    <label for="">
            Id Persona:
            <input type="text" name ="idpersona">
</label>
<br>
<label>
<label for="">
            Id Persona:
            <input type="text" name ="nombre">
</label>
<br>
<label for="">
            Id Persona:
            <input type="text" name ="apellido">
</label>
<br>
<label for="">
            Id Persona:
            <input type="number" name ="cedula">
</label>
<br>
<label for="">
            Id Persona:
            <input type="number" name ="celular">
</label>
<br>
<button type="submit">REGISTRAR</button>
</form>

@endsection
