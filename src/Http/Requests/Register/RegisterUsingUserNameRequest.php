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
            'first_name'=>'sometimes',
            'last_name'=>'sometimes',
            'phone_number'=>'sometimes',
            'username'=>'sometimes',
            'email'=>'alpha_spaces',
        ];
    }
}
