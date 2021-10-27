<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStore extends FormRequest
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
        return [
            'respuesta1'=> 'required',
            'respuesta2'=> 'required',
            'respuesta3'=> 'required',
            'respuesta4'=> 'required',
            'respuesta5'=> 'required',
            'respuesta6'=> 'required',
            'respuesta7'=> 'required',
            'respuesta8'=> 'required',
            'respuesta9'=> 'required',
            'respuesta10'=> 'required'

        ];
    }
}
