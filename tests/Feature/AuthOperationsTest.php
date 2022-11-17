<?php

namespace neomn\laravel_auth_api\tests\Feature;

use neomn\laravel_auth_api\tests\TestCase;

class AuthOperationsTest extends TestCase
{
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
        $response = $this->json('post' ,'api/auth/update-phone-number');
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

    public function test_registered_successfully()
    {
        $this->assertTrue(false);
    }

    public function test_logged_in_successfully()
    {
        $this->assertTrue(false);
    }

    public function test_user_verified_successfully()
    {
        $this->assertTrue(false);
    }

    public function test_forgotten_password_recover_account()
    {
        $this->assertTrue(false);
    }

    public function test_update_phone_number()
    {
        $this->assertTrue(false);
    }

    public function test_update_user_info()
    {
        $this->assertTrue(false);
    }

    public function test_logout()
    {
        $this->assertTrue(false);
    }
}
