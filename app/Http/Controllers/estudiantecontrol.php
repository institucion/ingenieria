<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\curso;
use Illuminate\Http\Request;
use App\estudiante;
use App\matricula;
use App\Http\Requests\CreateAlumnoRequest;


class estudiantecontrol extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
	      $this->middleware('auth');	
	}
	public function index()
	{
		$mensaje="";
		return view("vistas.registroalumnos")->with('mensaje', $mensaje);	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAlumnoRequest $request)
	{
		$id;
		$fecha=date("y/m/d");
		$idcurso=curso::where('grado','=',$request->grado)->where('grupo','=',$request->grupo)->get();


foreach ($idcurso as $cursos) {
	$id=$cursos->id;
	
}



$insalumno=estudiante::create(['identificacion'=>$request->identificacion, 'nombre'=>$request->nombre, 'apellido'=>$request->apellido, 'telefono'=>$request->telefono, 'sexo'=>$request->sexo,'direccion'=>'calle1','fec_vinculacion'=>$fecha, 'estado'=>'activo' ]);

$insmatricula=matricula::create(['idmatricula'=>'1', 'idestudiante_m'=>$request->identificacion, 'idcurso_m'=>$id ]);



$mensaje=" alumno registrado ";
		return view("vistas.registroalumnos")->with('mensaje', $mensaje);	



	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
