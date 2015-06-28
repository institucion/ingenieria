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
			'identificacion' =>'required|unique:estudiantes,identificacion',
			'nombre'=>'required',
			'sexo'  =>'required',
			'acudiente' =>'required',
			'apellido' =>'required',
			'telefono' =>'required',
			
			
		];
	}

	public function messages()
	{
		return [
			'identificacion.required' =>'identificacion requeridad',
			'nombre.required'=>'required',
			'sexo.required'  =>'required',
			'acudiente.required' =>'required',
			'apellido.required' =>'required',
			'telefono.required' =>'required',
			
		];
	}






}
