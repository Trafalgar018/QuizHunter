<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'question' => [
        'required', 'string'
    ],



        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'Introduzca una pregunta una pregunta'
        ];
    }

}