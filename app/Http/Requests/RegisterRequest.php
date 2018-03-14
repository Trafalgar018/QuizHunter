<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class RegisterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = array();
        $rules['name'] = $this->validateName();
        $rules['email'] = $this->validateEmail();
        return $rules;
    }
    /**
     * @return array de todos los mensajes
     */
    public function messages() {
        $messagesName = $this->messagesName();
        $messagesEmail = $this->messagesEmail();
        $mensajes = array_merge(
            $messagesName,
            $messagesEmail
        );
        return $mensajes;
    }
    /**
     * @return array de los mensajes de error del nombre
     */
    protected function messagesName() {
        $messages = array();
        $messages["name.required"] = 'El nombre es requerido';
        $messages["name.regex"] = 'El nombre sólo acepta letras y espacios';
        $messages["name.max"] = 'Supera el máximo';
        return $messages;
    }
    /**
     * @return array de los mensajes de erorr del email
     */
    protected function messagesEMail() {
        $messages = array();
        $messages["email.required"] = 'El email es requerido';
        $messages["email.email"] = 'No es un email válido';
        $messages["email.max"] = 'Supera el máximo';
        $messages["email.unique"] = 'El email no está disponible';
        return $messages;
    }
    /**
     * here, we are stablishing the validation rules
     *
     * @return string rules of valdations
     */
    protected function validateName() {
        return 'required|regex:/^[\pL\s\-]+$/u|max:200';
    }
    protected function validateEmail() {
        return 'required|email|max:255|unique:users';
    }
}