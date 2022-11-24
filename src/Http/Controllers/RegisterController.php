<?php

namespace neomn\laravel_auth_api\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use neomn\laravel_auth_api\Http\Controllers\Controller;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingEmailRequest;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingUserNameRequest;

class RegisterController extends Controller
{
    public function registerUsingUserName(RegisterUsingUserNameRequest $request)
    {
        $registrationData = $request->safe()->all();
        $registrationData['password'] = Hash::make($registrationData['password']);

        //register user in userDataBase

        // notify user that registration is completed

        //this is just a test response
        return response()->json(['Successfully Registered'=>$registrationData]);
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
