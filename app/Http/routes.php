<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::resource('administrador', 'administradorcontrol');
Route::resource('estudiante', 'estudiantecontrol');
Route::resource('modificaralumnos', 'modificaralumnoscontrol');
Route::resource('secretariap', 'menusecretariacontrol');
Route::resource('historial', 'menuhistorialcontrol');
Route::resource('registrarprofesor', 'registroprofesorcontrol');
Route::resource('modificarprofesor', 'modificarprofesorcontrol');
Route::resource('consultarprofesor', 'consultarprofesorcontrol');
Route::resource('consultaralumnos', 'consultaralumnoscontrol');
Route::resource('secretaria', 'menusecretariaecontrol');
Route::resource('login', 'logincontrol');
Route::resource('registrodesecretaria', 'registrosecretariacontrol');
Route::resource('menuprofesor', 'menuprofesorcontrol');
Route::resource('menu-profesor', 'menuprofesor2control');
Route::resource('notasdealumno', 'notasdealumnocontrol');
Route::resource('registrodenotas', 'registrodenotascontrol');
Route::resource('exalumnos', 'exalumnoscontrol');
Route::resource('exprofesores', 'exprofesorescontrol');
Route::resource('asignaturasasignadas', 'asignaturasasignadascontrol');
Route::resource('asignaturasquenoseimparten', 'asignaturasquenoseimpartencontrol');
Route::resource('listadodeestudiantes', 'listadodeestudiantescontrol');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
