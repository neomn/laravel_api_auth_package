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

    public function test_forget_password_route_exists(){
        $loginResponse = $this->post('api/auth/forget-password');
        $this->assertTrue($loginResponse->status() != 404);
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
