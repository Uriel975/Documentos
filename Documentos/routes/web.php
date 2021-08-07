<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/',function(){
 return view('/');
});

////Login Roger///
Route::get('/login', function () {
    return view('Login');

});

//Route::get('/', function () {
    //return view('index');
//});

////=====Para solo boton de descarga=///////
Route::view('/ConsEstudio', 'constanciaEstudio')->name('ConsEstudio');

 //ruta de descarga Generación de constancia de estudio (Grado que cursa)///
Route::get('/Estudio', 'App\Http\Controllers\ConstanciaGradoController@Grado');


/////Constancias Laborales///
// Route::view('/Const', 'constanciaEstudio')->name('Const');


///Credencial del maestro////
//Route::view('/CreMtrs', 'credencialMaestro')->name('CreMtrs');

/////Template///
Route::view('/Principal', 'Principal')->name('Principal');


///////Constancia de servicio /////
// Route::view('/constancia', 'constanciaserv')->name('constancia');
Route::get('/laboral', 'App\Http\Controllers\ConstanciaServController@Servicio');


/////// Generación del documento de inscripción por alumno /////
Route::view('/inscripcion', 'inscripcion')->name('inscripcion');
Route::get('/Inscripcion', 'App\Http\Controllers\InscripcionController@inscripcion');

///////Credencial Alumno /////

Route::get('/Maestro', 'App\Http\Controllers\CredencialMaestroController@Maestro');


///////Credencial Alumno /////
Route::view('/credencial', 'CredencialAlu')->name('credencial');
Route::get('/Credencial', 'App\Http\Controllers\CredencialAluController@Credencial');


////VISTA DE LOS DOCUMENTOS///////
Route::view('/Archivos','Archivos')->name('Archivos');





