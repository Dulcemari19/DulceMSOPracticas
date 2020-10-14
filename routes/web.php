<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Hellowordl ', function() {
    return view('hellowordl'); 
});


Route::get('miprimer_layout_laravel', function() {
    return View::make('miprimer_layout_laravel'); 
});

Route::resource('/Helloworld', 'Materias\controllerMaterias'); 

//Rotus Materias
Route::get('/miprimerarray', 'Materias\controllerMaterias@getAlumnos')->name('alumno');
//Configuramos el prefix con un grupo de rutas para quitar el /api de la ruta
Route::group(['prefix'=>'api'], function(){
    Route::apiResource('materias', 'Materias\MateriasController');
    //Route::apiResource('alumno', 'controllerAlumnos@store');
});

