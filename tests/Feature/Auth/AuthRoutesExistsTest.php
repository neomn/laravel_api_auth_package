<?php

namespace neomn\laravel_auth_api\tests\Feature\Auth;

use Illuminate\Support\Facades\Log;
use neomn\laravel_auth_api\tests\TestCase;

class AuthRoutesExistsTest extends TestCase
{
    protected function withoutExceptionHandling(array $except = [])
    {

    }

    public function test_login_route_exists()
    {
        $loginResponse = $this->post('api/auth/login');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_register_route_exists()
    {
        $loginResponse = $this->post('api/auth/register');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_verify_user_route_exists()
    {
        $loginResponse = $this->post('api/auth/verify-user');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_forget_password_route_exists()
    {
        $loginResponse = $this->post('api/auth/forget-password');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_update_phone_number_route_exists()
    {
        $response = $this->post('api/auth/update-phone-number');
        $response->assertStatus(401);
    }

    public function test_update_user_info_route_exists()
    {
        $response = $this->json('post' ,'api/auth/update-user-info');
        $response->assertStatus(401);
    }

    public function test_logout_route_exists()
    {
        $response = $this->json('post' ,'api/auth/logout');
        $response->assertStatus(401);
    }
}
