<?php

namespace neomn\laraauthapi\tests\Feature\Auth;

use neomn\laraauthapi\tests\TestCase;

class AuthTest extends TestCase
{
    public function test_auth_routes_exists()
    {
        $loginResponse = $this->post('api/auth/login');
        $registerResponse = $this->post('api/auth/register');
        $verifyUserResponse = $this->post('api/auth/verify-user');
        $forgetPasswordResponse = $this->post('api/auth/forge-password');
        $updatePhoneNumberResponse = $this->post('api/auth/update-phone-number');
        $updateUserInfoResponse = $this->post('api/auth/update-user-info');
        $logoutResponse = $this->post('api/auth/logout');

        $this->assertTrue($this->endpointExists($loginResponse));
    }

    public function endpointExists( $uri)
    {
        $headers = get_headers('http://127.0.0.1/api/auth/login');
        return $headers || strpos($headers[0] , '200');
    }
}
