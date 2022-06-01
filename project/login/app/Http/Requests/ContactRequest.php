<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email', 
            'number' => 'required|min:10|max:14',
            'drop_list' => 'required'
        ];
    }

    public function messages(){
        return[
//            'name.required' => 'Поле імя повинно бути заповнене',
//            'surname.required' => 'Поле прізвище повинно бути заповнене',
//            'password.required' => 'Поле пароль повинно містити не менше 6 букв',
//            'email.required' => 'Поле пошта повинно бути заповнене', 
//            'number.required'=>'Поле номер телефону повинно бути заповнене',  
        ];    
    }
}
