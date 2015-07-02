<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrarSecretaria;
use \App\secretaria;
use \App\User;
use Illuminate\Http\Request;

class registrosecretariacontrol extends Controller {

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
		$mensaje=NULL;
		return view("vistas.registrodesecretaria",compact('mensaje'));
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
	public function store(RegistrarSecretaria $request)
	{

        
    $insecre=secretaria::create(['cedula'=>$request->cedula, 'nombre'=>$request->nombre, 'apellido'=>$request->apellido, 'telefono'=>$request->telefono, 'contraseña'=>bcrypt($request->contraseña) ]);
     $inuser=User::create(['usuario'=>$request->nombre,'password'=>bcrypt($request->contraseña),'tipo'=>'secretaria' ]);






		$mensaje=" secretaria registrada ";
			return view("vistas.registrodesecretaria",compact('mensaje'));
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
