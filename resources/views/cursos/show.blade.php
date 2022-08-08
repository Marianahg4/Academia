@extends('layouts.app')

@section('titulo', 'detalle cursos')

@section('contenido')

<div>
    <div class= "m-auto">
        <img style="height:300px; width:300px" src="{{Storage::url($cursito->imagen)}}">
        <p class="card-text">{{$cursito->descripcion}}</p>
        <p class="card-text">{{$cursito->duracion}}</p>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">editar</a>
        <br>
        <br>

        <form class='form-group' action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">--Eliminar--</button>
        </form>
    </div>
</div>

@endsection
