<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanViewLogin()
    {
        $response = $this->get('auth/login');

        $response->assertStatus(200);

        $response->assertViewIs('auth.login')->assertSee('auth/login');
    }

    public function test_route_admin_categories()
    {
        $response = $this->get('/admin/categories');

        $response->assertStatus(302);  // điều hướng về trang khác
    }

    
    public function test_route_admin_user()
    {
        $response = $this->get('/admin/users');

        $response->assertStatus(302);  // điều hướng về trang khác
    }
}