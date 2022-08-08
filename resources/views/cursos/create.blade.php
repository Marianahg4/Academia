@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')


<form action="/cursos" method="POST" enctype= "multipart/form-data">
    @csrf

    @if ($errors->any())
        @foreach ($errors->all() as $alerta)

            <div class="alert alert-danger" role="alert">
                <ul>

                    <li>{{$alerta}}</li>
                </ul>
            </div>
        @endforeach
    @endif


    <br>
        <h2>aqui puedes crear un nuevo curso</h2>
        <div class="form-group">
            <label for="nombre">nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="duracion">duracion</label>
            <input id="duracion" class="form-control" type="text" name="duracion">
        </div>
        <div class="form-group">
            <label for="imagen">cambie la imagen del curso</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">crear</button>
</form>


@endsection


{{--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h2>aqui puedes crear un nuevo curso</h2>
        <div class="form-group">
            <label for="nombre">nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="duracion">duracion</label>
            <input id="duracion" class="form-control" type="text" name="duracion">
        </div>
        <button class="btn btn-dark" type="submit">crear</button>

    </div>

</body>
</html>
--}}
