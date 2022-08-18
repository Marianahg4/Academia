@extends('layouts.app')

@section('titulo', 'crear docente')

@section('contenido')


<br>
<br>

<div class="text-center">
    <img src="{{Storage::url($docentico->foto)}}" alt="">
    <br>
    <br>
    <iframe width="400" height="400" src="{{Storage::url($docentico -> doc_identidad)}}" frameborder="0"></iframe>
    <p>{{$docentico->nombres}}</p>
    <p>{{$docentico->apellidos}}</p>
    <p>{{$docentico->titulo_universitario}}</p>
    <p>{{$docentico->edad}}</p>
    <p>{{$docentico->fecha_contrato}}</p>


    <a href="/docentes/{{$docentico->id}}/edit" class="btn btn-success">Actualizar Información</a>

    <br>
    <br>

    <form  class="form-group" action="/docentes/{{$docentico->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Docente</button>
    </form>
</div>

@endsection
