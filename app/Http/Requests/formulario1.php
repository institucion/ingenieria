<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class formulario1 extends Request {

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
	'identificacion.required' =>'identificacion requeridad',
		];
	}
public function messages()
	{
		return [
			
	'identificacion.required' =>'identificacion requeridad',
		];
	}






}
