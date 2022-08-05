@extends('layouts.app')

@section('titulo', 'lista Cursos')

@section('contenido')
<br>
<br>
<h2> listado de cursos </h2>
{{--foreach sirve para iterar arrays, es decir permite ciclos en listas--}}
<div class="row">
    @foreach ($cursito as $item)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin:20px">
                <img style="height:350px width:150px" src="{{Storage::url($item->imagen)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    {{-- <p class="card-text">{{$item->descripcion}}</p>
                    <p class="card-text">{{$item->duracion}}</p> --}}
                    <a href="/cursos/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                </div>
            </div>
        </div>{{--Cierro el col--}}
    @endforeach
</div>{{--Cierro el row--}}
{{--la doble llave sirve para interpolar.
    interpolar es tarer una variable de otro lenguaje al lenguaje que se esta usando--}}
@endsection


