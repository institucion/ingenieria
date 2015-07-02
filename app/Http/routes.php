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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
Route::resource('/', 'administradorcontrol');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('formulario', 'formulario');
Route::resource('administrador_est', 'administradorcontrol');
Route::resource('estudiantes', 'estudiantecontrol');
Route::resource('modificaralumnos', 'modificaralumnoscontrol');
Route::resource('secretariap', 'menusecretariacontrol');
Route::resource('historial', 'menuhistorialcontrol');
Route::resource('registrarprofesor', 'registroprofesorcontrol');
Route::resource('modificarprofesor', 'modificarprofesorcontrol');
Route::resource('consultarprofesor', 'consultarprofesorcontrol');
Route::resource('consultaralumnos', 'consultaralumnoscontrol');
Route::resource('secretaria_est', 'menusecretariaecontrol');
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
Route::resource('ver_asignaturas_estudiante', 'control_ver_asignaturas');
Route::resource('mod_nota', 'control_mod_nota');
Route::resource('matricular_asignatura_est', 'contorl_matricular_asignaturas_est');
Route::resource('registar_asignatura', 'control_registar_asig');
Route::resource('menu_asignatura', 'control_menu_asignatura');
Route::resource('actualizar_asignatura', 'control_actualizar_asignatura');
Route::resource('asignar_asignatura', 'control_asignar_asignatura');
Route::resource('consultar_asignatura', 'control_consultar_asignatura');
Route::resource('prueba', 'control_prueba');
Route::resource('menu_principal_sec', 'control_menu_principal');
Route::resource('actualizarestudiante', 'ActualizarEstudiante');
Route::resource('eliminarestudiante', 'EliminarEstudiante');
Route::resource('eliminarest', 'EliminarEst');
Route::resource('post', 'PostController');

