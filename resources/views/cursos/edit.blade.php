@extends('layouts.app')

@section('titulo', 'editar curso')

@section('contenido')

<form action="/cursos/{{$cursito->id}}" method="POST" enctype= "multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>formulario edicion de curso</h2>
        <div class="form-group">
            <label for="nombre">edita el nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="name" value='{{$cursito->nombre}}'>
        </div>
        <div class="form-group">
            <label for="descripcion">edita la descripcion</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="duracion">edita la duracion</label>
            <input id="duracion" class="form-control" type="text" name="duracion">
        </div>
        <div class="form-group">
            <label for="imagen">cargue nueva imagen del curso</label>
            <br>
            <div>
             <img style="height:80px; width:80px" src="{{Storage::url($cursito->imagen)}}">
            </div>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">actualizar</button>
</form>



@endsection
