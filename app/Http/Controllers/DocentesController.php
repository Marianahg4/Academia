<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentico = Docentes::all();
        return view('docentes.index', compact('docentico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacionDatos = $request->validate([
            //'nombre'=>'required|max:10',
            //'imagen'=>'required|image'
        ]);
        //se devuelve la peticion hecha al servidor
       // return  $request->all();
       $docentico = new Docentes(); //crear una instancia de la clase Curso
       $docentico->nombres = $request-> input('nombres');
       $docentico->apellidos = $request-> input('apellidos');
       $docentico->titulo_universitario = $request-> input('titulo_universitario');
       $docentico->edad = $request-> input('edad');
       $docentico->fecha_contrato = $request-> input('fecha_contrato');
       if($request->hasFile('imagen')){
       }
       $docentico->save(); //con el comando save se registra en la bd
       return 'guardado exitosamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
