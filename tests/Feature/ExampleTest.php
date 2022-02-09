<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_route_login()
    {
        $response = $this->get('/auth/login');

        $response->assertStatus(200);
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
