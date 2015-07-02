<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrarSecretaria extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'cedula' =>'required|unique:secretarias,cedula',
			'nombre'=>'required',
			'apellido' =>'required',
			'telefono' =>'required',
			'contraseña' =>'required',
			
		];
	}

	public function messages()
	{
		return [
			'cedula.required' =>'cedula requeridad',
			'nombre.required'=>'required',
			'apellido.required' =>'required',
			'telefono.required'  =>'required',
			'contraseña.required' =>'required',
	
		];
	}






}