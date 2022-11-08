<?php

namespace neomn\laraauthapi\tests\Feature;

use neomn\laraauthapi\tests\TestCase;

class SampleTest extends TestCase
{
    public function test_auth_routes_exists()
    {
        $response = $this->post('/auth/login');
        $response->assertJson('/auth/login');
    }
}
