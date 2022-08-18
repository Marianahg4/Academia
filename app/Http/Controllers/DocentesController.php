<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
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
        return view ('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {

        /*$validacionDatos = $request->validate([
            'nombre'=>'required|max:10',
            'imagen'=>'required|imagen'
        ]);*/

        $docentico = new Docentes();
        $docentico->nombres = $request-> input('nombres');
        $docentico->apellidos = $request-> input('apellidos');
        $docentico->titulo_universitario = $request-> input('titulo_universitario');
        $docentico->edad = $request-> input('edad');
        $docentico->fecha_Contrato = $request-> input('fecha_contrato');
        if($request->hasFile('foto', 'doc_identidad')){
            $docentico->foto=$request->file('foto')->store('public/docentes');
            $docentico->doc_identidad=$request->file('doc_identidad')->store('public/docentes');
        }
        $docentico->save();
        return view('docentes.to_update');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentico = Docentes::find($id);
        return view('docentes.show' , compact('docentico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentico = Docentes::find($id);
        return view('docentes.edit' , compact('docentico'));
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
        $docentico = Docentes::find($id);
        //return $request;
        $docentico->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $docentico->foto=$request->file('foto')->store('public/cursos');
        }
        $docentico->save();
        return view('docentes.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentico = Docentes::find($id);
        //return $cursito;
        $urlImagenBD = $docentico->foto;
        //return $urlImagenBD;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        //return $nombreImagen;
        $rutaCompleta = public_path().$nombreImagen;
        //return $rutaCompleta;
        unlink($rutaCompleta);
        $docentico->delete();
        return view('docentes.remove');
    }
}
