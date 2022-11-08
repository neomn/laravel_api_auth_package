<?php

namespace neomn\laraauthapi\tests\Feature;

use neomn\laraauthapi\tests\TestCase;

class TestAuth extends TestCase
{
    public function test_auth_routes_exists()
    {
        $response = $this->post('/auth/login');
        $response->assertJsonStructure();
//        $response->assertStatus(200);
    }
}
