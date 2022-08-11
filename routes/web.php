<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/docentes/create', function () {
    return view('docentes.create');
});
Route::get('/', function () {
    return view('cursos.bienvenido');
});
Route::get('/cursos/nosotros', function () {
    return view('cursos.nosotros');
});

Route::get('miruta', function() {
    return 'estoy en laravel';
});
//los parametros van entre llaves
Route::get('/minombre/{nombre}', function($nombre) {
    return 'hola soy ' . $nombre;
});

//Ruta llamada suma. el resultado sera: La suma de a + b es:
Route::get('/suma/{a}/{b}', function($a, $b) {
    return 'El resultado es ' . $a+$b;
});

//Menciono la clase y el metodo como un array
//debo usar la palabra reservada class
//El metodo va entre comilla simple
Route::get('/heladeria/{opc}',[HeladeriaController::class,'totalHelado']);
Route::get('/precio/{a}',[ControladorPrecios::class,'descuento']);
Route::get('/iva/{a}/{b}',[ControladorPrecios::class,'getIVA']);
route::resource('cursos', CursoController::class);


