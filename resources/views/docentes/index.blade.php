@extends('layouts.app')

@section('titulo', 'lista docentes')

@section('contenido')

<br>
<br>
<br>
<h2>Listado Docentes</h2>

<div class="row">
    @foreach ($docentico as $item)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin:20px">
                <img style="height:350px width:150px" src="{{Storage::url($item->foto)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nombres}}</h5>
                    <a href="/docentes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
