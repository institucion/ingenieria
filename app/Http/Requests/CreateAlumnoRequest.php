<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAlumnoRequest extends Request {

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
			'identificacion' =>'required|unique:alumnos,identificacion',
			'nombre' =>'required',
			'apellido' =>'required',
			'telefono' =>'required',
			'acudiente' =>'required',
			
		];
	}

	public function messages()
	{
		return [
			'identificacion.required' =>'identificacion requeridad',
			'identificacion.unique' =>'identificacion ya existe',
			'nombre.required' =>'Falta este campo',
			'apellido.required' =>'Falta este campo',
			'telefono.required' =>'Falta este campo',
			'acudiente.required' =>'Falta este campo',
			
		];
	}






}
