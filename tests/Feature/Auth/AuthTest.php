<?php

namespace neomn\laraauthapi\tests\Feature\Auth;

use neomn\laraauthapi\tests\TestCase;

class AuthTest extends TestCase
{
    public function test_auth_routes_exists()
    {
        $loginResponse = $this->post('api/auth/login');
        $registerResponse = $this->post('api/auth/register');
//        $response->assertJson('auth/login',);

    }
}
