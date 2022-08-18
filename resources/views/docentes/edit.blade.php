@extends('layouts.app')

@section('titulo', 'editar docente')

@section('contenido')

<form action="/docentes/{{$docentico->id}}" method="POST" enctype= "multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Formulario de actualización de información de los docentes.</h2>
        <div class="form-group">
            <label for="nombres">Edita el nombre</label>
            <input id="nombres" class="form-control" type="text" name="nombres" value="{{$docentico->nombres}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Edita el apellido</label>
            <input id="apellidos" class="form-control" type="text" name="apellidos" value="{{$docentico->apellidos}}">
        </div>
        <div class="form-group">
            <label for="titulo_universitario">Edita el titulo universitario</label>
            <input id="titulo_universitario" class="form-control" type="text" name="titulo_universitario" value="{{$docentico->titulo_universitario}}">
        </div>
        <div class="form-group">
            <label for="edad">Edita la edad</label>
            <input id="edad" class="form-control" type="text" name="edad" value="{{$docentico->edad}}">
        </div>
        <div class="form-group">
            <label for="fecha_contrato">Edita la fecha del contrato</label>
            <input id="fecha_contrato" class="form-control" type="text" name="fecha_contrato" value="{{$docentico->fecha_contrato}}">
        </div>
        <div class="form-group">
            <label for="foto">Carge una nueva foto</label>
            <br>
            <img style="height:100px; width:160px" src="{{Storage::url($docentico->foto)}}" class="card-img-top" alt="...">
            <br>
            <input id="foto" type="file" name="foto">
        </div>
        <div class="form-group">
            <label for="doc_identidad">Carge una nueva foto</label>
            <br>
            <img style="height:100px; width:160px" src="{{Storage::url($docentico->doc_identidad)}}" class="card-img-top" alt="...">
            <br>
            <input id="doc_identidad" type="file" name="doc_identidad">
        </div>
        <button class="btn btn-dark" type="submit">Actualizar</button>
</form>
