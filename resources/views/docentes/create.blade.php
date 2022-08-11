@extends('layouts.app')

@section('titulo', 'crear docente')

@section('contenido')

    <form action="/docentes" method="POST">
        @csrf
        <br><br><br><br>
        <h2>Aqui puedes inscribirte como docente</h2>
        <div class="form-group">
            <label for="nombre">Nombre del Docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido del Docente</label>
            <input id="apellido" class="form-control" type="text" name="apellido">
        </div>
        <div class="form-group">
            <label for="titulo">Titulo Universitario</label>
            <input id="titulo" class="form-control" type="text" name="titulo">
        </div>
        <div class="form-group">
            <label for="edad">Edad del Docente</label>
            <input id="edad" class="form-control" type="number" name="edad">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha Contrato</label>
            <input id="fecha" class="form-control" type="date" name="fecha">
        </div>
        <div class="form-group">
            <label for="imagen">Foto</label>
            <br>
            <input id="imagen" type="file" name="nombre">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue documento de identidad</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <br>
        <button class="btn btn-dark" type="submit">Guardar</button>
    </form>
