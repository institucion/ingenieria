<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModificarAlumno;
use Illuminate\Http\Request;
use App\curso;
use App\estudiante;
use App\matricula;

class modificaralumnoscontrol extends Controller {

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
		$alum=NULL;
	return view("vistas.modificaralumnos",compact('alum'));
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
	public function store(ModificarAlumno $request)
	{

		$alum;
		$idcurso=0;
		$grado;
		$grupo;

$iden=$request->identificacion;

//buscamos el registro que coincida con la indentificacion proporcionada
$matriculas=matricula::where('idestudiante_m','=',$iden)->get();
		
foreach ($matriculas as $matricula) {
     	$idcurso=$matricula->idcurso_m;
     	 }
 if($idcurso>0){
//se busca el grado y grupo en el que esta matriculado
$cursos=curso::where('id','=',$idcurso)->get();
     foreach ($cursos as $curso) {
     $grado=$curso->grado;
     $grupo=$curso->grupo;
   }

///buscamos toda la informacion del alumno
   		$alumnos=estudiante::where('identificacion','=',$iden)->where('estado','=','activo')->get();

///guardamos todo en un array
		foreach ($alumnos as $alumno) {
$alum=array($alumno->nombre,$alumno->apellido,$alumno->identificacion,$alumno->telefono,$alumno->sexo,
	        $grado,$grupo,$alumno->acudiente);
			}

	}
	else{
		$alum="No";
	}


		
return view("vistas.modificaralumnos",compact('alum'));
     




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
