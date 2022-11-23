<?php

namespace neomn\laravel_auth_api\Http\Controllers;

use neomn\laravel_auth_api\Http\Requests\Register\RegisterUsingUserNameRequest;

class AuthController extends Controller
{
    public function login()
    {
        return response()->json('login');
    }

    public function verifyUser()
    {
        return response()->json('verify user');
    }

    public function updatePhoneNumber()
    {
        return response()->json('update phone number');
    }

    public function updateUserInfo()
    {
        return response()->json('update user info');
    }

    public function forgetPassword()
    {
        return response()->json('forget password');
    }

    public function logout(){
        return response()->json('logout');
    }
}
