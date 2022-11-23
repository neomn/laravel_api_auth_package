<?php

namespace neomn\laravel_auth_api\Http\Controllers;

use neomn\laravel_auth_api\Http\Controllers\Controller;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingEmailRequest;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingUserNameRequest;

class RegisterController extends Controller
{
    public function registerUsingUserName(RegisterUsingUserNameRequest $request)
    {
        $registrationData = $request->safe()->all();

        //register user in userDataBase

        return response()->json('Successfully Registered');
    }

    public function registerUsingEmail(RegisterUsingEmailRequest $request)
    {
        $registrationData = $request->safe()->all();

        //register user in userDataBase

        return response()->json('Successfully Registered');
    }

    public function registerUsingPhoneNumber()
    {

    }

    public function registerUsingSocialMedia()
    {

    }
}
