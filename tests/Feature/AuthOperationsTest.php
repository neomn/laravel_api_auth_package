<?php

namespace neomn\laravel_auth_api\tests\Feature;

use neomn\laravel_auth_api\tests\TestCase;

class AuthOperationsTest extends TestCase
{
    public function test_route_register_using_username_exists()
    {
        $loginResponse = $this->post('api/auth/register/username');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_route_register_using_email_exists()
    {
        $loginResponse = $this->post('api/auth/register/email');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_route_register_using_phone_number_exists()
    {
        $loginResponse = $this->post('api/auth/register/email');
        $this->assertTrue($loginResponse->status() != 404);
    }


    public function test_route_register_using_social_media_exists()
    {
        $loginResponse = $this->post('api/auth/register/email');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_route_login_exists()
    {
        $loginResponse = $this->post('api/auth/login');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_route_verify_user_exists()
    {
        $loginResponse = $this->post('api/auth/verify-user');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_route_forget_password_exists()
    {
        $loginResponse = $this->post('api/auth/forget-password');
        $this->assertTrue($loginResponse->status() != 404);
    }

    public function test_route_update_phone_number_exists()
    {
        $response = $this->json('post' ,'api/auth/update-phone-number');
        $response->assertStatus(401);
    }

    public function test_route_update_user_info_exists()
    {
        $response = $this->json('post' ,'api/auth/update-user-info');
        $response->assertStatus(401);
    }

    public function test_route_logout_exists()
    {
        $response = $this->json('post' ,'api/auth/logout');
        $response->assertStatus(401);
    }

    public function test_user_registered_successfully()
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
