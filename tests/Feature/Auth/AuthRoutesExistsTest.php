<?php

namespace neomn\laravel_auth_api\tests\Feature\Auth;

use Illuminate\Support\Facades\Log;
use neomn\laravel_auth_api\tests\TestCase;

class AuthRoutesExistsTest extends TestCase
{
    public function test_login_route_exists(){
        $loginResponse = $this->post('api/auth/login');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_register_route_exists(){
        $loginResponse = $this->post('api/auth/register');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_verify_user_route_exists(){
        $loginResponse = $this->post('api/auth/verify-user');
        $this->assertTrue($loginResponse->status() != 404);
    }


    public function test_auth_routes_exists()
    {
        $endpoints_not_requiring_auth = [
            'login' => $loginResponse = $this->post('api/auth/login'),
            'register' => $registerResponse = $this->post('api/auth/register'),
            'verify-user' => $verifyUserResponse = $this->post('api/auth/verify-user'),
            'forge-password' => $forgetPasswordResponse = $this->post('api/auth/forge-password'),
        ];
        foreach($endpoints_not_requiring_auth as $key => $endpoint){
           echo ('checking >> ' . $key);
            $this->assertTrue($endpoint->status() != 404);
        }

//        $endpoints_requiring_auth = [
//            $updatePhoneNumberResponse = $this->post('api/auth/update-phone-number'),
//            $updateUserInfoResponse = $this->post('api/auth/update-user-info'),
//            $logoutResponse = $this->post('api/auth/logout'),
//        ];
//        foreach($endpoints_requiring_auth as $key => $endpoint){
//            $this->assertTrue($endpoint->status() == 401);
//        }

    }
}
