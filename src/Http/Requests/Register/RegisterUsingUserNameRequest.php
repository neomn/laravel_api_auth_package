<?php

namespace neomn\laravel_auth_api\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUsingUserNameRequest extends FormRequest
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
            'user_name'=>'required|alpha_dash',
            'password'=>'required|min:8|max:32',
            'first_name'=>'required|alpha_spaces|max:32',
            'last_name'=>'required|alpha_spaces|max:32',
        ];
    }
}
