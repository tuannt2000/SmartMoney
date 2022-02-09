<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testUserCanViewLogin()
    {
        $response = $this->get('/auth/login');

        $response->assertStatus(200);

        $response->assertViewIs('auth.login')->assertSee('auth/login');
    }
}
