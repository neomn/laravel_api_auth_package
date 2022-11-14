<?php

namespace neomn\laraauthapi\tests\Feature\Auth;

use neomn\laraauthapi\tests\TestCase;

class AuthTest extends TestCase
{
    public function test_auth_routes_exists()
    {
        $endpoints_not_requiring_auth = [
            $loginResponse = $this->post('api/auth/login'),
            $registerResponse = $this->post('api/auth/register'),
            $verifyUserResponse = $this->post('api/auth/verify-user'),
            $forgetPasswordResponse = $this->post('api/auth/forge-password'),
        ];

        foreach($endpoints_not_requiring_auth as $key => $endpoint){
            $this->assertTrue($endpoint->status() != 404);
        }

        $endpoints_requiring_auth = [
            $updatePhoneNumberResponse = $this->post('api/auth/update-phone-number'),
            $updateUserInfoResponse = $this->post('api/auth/update-user-info'),
            $logoutResponse = $this->post('api/auth/logout'),
        ];

        foreach($endpoints_requiring_auth as $key => $endpoint){
            $this->assertTrue($endpoint->status() == 401);
        }

    }
}
