<?php
namespace App\Http\Requests;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
class AjaxRequest extends RegisterRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = array();
        if ($this->exists('name')){
            $rules['name'] = $this->validateName();
        }
        if ($this->exists('email')){
            $rules['email'] = $this->validateEmail();
        }
        return $rules;
    }
    /**
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation($validator) {
        $errors = $validator->errors();
        $response = new JsonResponse([
            'name' => $errors->get('name'),
            'email' => $errors->get('email'),
        ]);
        throw new ValidationException($validator, $response);
    }
}
