<?php

namespace neomn\laravel_auth_api\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use neomn\laravel_auth_api\Http\Controllers\Controller;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingEmailRequest;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingPhoneNumberRequest;
use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingUserNameRequest;

class RegisterController extends Controller
{
    public function registerUsingUserName(RegisterUsingUserNameRequest $request)
    {
        $registrationData = $request->safe()->all();
        $registrationData['password'] = Hash::make($registrationData['password']);

        //register user in userDataBase

        // notify user that registration is completed


        return response()->json(['Successfully Registered'=>$registrationData]);
    }

    public function registerUsingEmail(RegisterUsingEmailRequest $request)
    {
        $registrationData = $request->safe()->all();
        $registrationData['password'] = Hash::make($registrationData['password']);

        //register user in userDataBase

        // notify user using its email that registration is completed

        return response()->json(['Successfully Registered'=>$registrationData]);
    }

    public function registerUsingPhoneNumber(RegisterUsingPhoneNumberRequest $request)
    {
        $registrationData = $request->safe()->all();
        $registrationData['password'] = Hash::make($registrationData['password']);

        //register user in userDataBase

        // notify user using its phone number that registration is completed

        return response()->json(['Successfully Registered'=>$registrationData]);
    }

    public function registerUsingSocialMedia()
    {

    }
}
