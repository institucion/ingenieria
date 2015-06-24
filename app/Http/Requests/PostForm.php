<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostForm extends Request {

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
			"title"=>"required|min:5|max:45",
			"body"=>"required|min:5|max:500",
		];
	}
	public function messages()
	{
		return[
			'title.required'=>'El campo title es requerido',
			'title.min'=>'El campo title no puede tener menos de 5 caracteres',
			'title.min'=>'El campo title no puede tener mas de 45 caracteres',
			'body.required'=>'El campo body es requerido',
			'body.min'=>'El campo body no puede tener menos de 5 caracteres',
			'body.min'=>'El campo body no puede tener mas de 500 caracteres',


		];

	}

}
