<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return "API de Diego Alberca hecha con Lumen";
});

$router->group(['prefix' => 'api/'], function () use ($router){
	$router->get('alumno','AlumnoController@index');
	$router->get('alumno/{id}','AlumnoController@getAlumno');
	$router->put('alumno/{id}','AlumnoController@updateAlumno');
	$router->post('alumno','AlumnoController@createAlumno');
	$router->delete('alumno{id}','AlumnoController@deleteAlumno');
});
