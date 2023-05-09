<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
{
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
        $rules = [
            'name' => 'required|min:3|max:255',
            'text' => 'required|min:3|max:1000',
        ];
       /*
        if (!empty($this->user)) {
            $rules['email'][] = Rule::unique('users')->ignore($this->user->id);
        } else {
            $rules['email'][] = Rule::unique('users');
        }
      */
        return $rules;
    }
	public function messages(){
		return [
		'name.required'=>'поле заголовок обязательно к заполнению',
		'name.min'=>'поле text минимальное кол символов 3',
		'name.max'=>'поле text максимальное кол символов 255',
		'text.required'=>'поле text обязательно к заполнению',
		'text.min'=>'поле text минимальное кол символов 3',
		'text.max'=>'поле text максимальное кол символов 1000',
		
		];
	}
}
