<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //traemos toda la informacion a la tabla cursos mediante la instancia cursito que acceda al modelo curso
        $cursito = Curso::all();
        //se adjunta cursito a la vista para poderlo usar
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //se devuelve la peticion hecha al servidor
       // return  $request->all();
       $cursito = new Curso(); //crear una instancia de la clase Curso
       $cursito->name = $request-> input('name');
       $cursito->descripcion = $request-> input('descripcion');
       if($request->hasFile('imagen')){
        $cursito->imagen=$request->file('imagen')->store('public/cursos');
       }
       $cursito->duracion = $request-> input('duracion');
       $cursito->save(); //con el comando save se registra en la bd
       return 'guardado exitosamente';
       //return $request->input('nombre');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
        //return 'el id de este curso es: ' . $id;
        //return view('cursos.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = Curso::find($id);
        //return 'el id del curso que desea actualizar es ...' . $id;
       // return 'la informacion que usted quiere actualizar, se veria asi en formato array:' . $cursito ;
        return view('cursos.edit' , compact('cursito'));
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
        $cursito = Curso::find($id);
        //return $request;
    /*llenar la tabla  */
        //$cursito->fill($request->all());
        $cursito->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
           }
        $cursito->save();
        return 'la actualizacion fue exitosa';
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
