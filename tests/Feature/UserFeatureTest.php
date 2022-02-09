<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testCanLogin()
    {
        $user = User::create([
            'email' => 'test@hotmail.com', 
            'quyen' => 'user',
            // note you need to use the bcrypt function here to hash your password
            'password' => bcrypt('123456')
        ]);      

        $response = $this->post('auth/login', [
            'email' => 'test@hotmail.com',
            'quyen' => 'user',
            'password' => '123456'          
        ]);

        //this works
        // $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        //this fails 
        $this->assertTrue(Auth::check());
    }

    public function testUserCannotLoginWithIncorrectPassword()
    {
        User::create([
            'email' => 'test2@hotmail.com', 
            'quyen' => 'user',
            // note you need to use the bcrypt function here to hash your password
            'password' => bcrypt('123456')
        ]);      

        $response = $this->from('auth/login')->post('auth/login', [
            'email' => 'test2@hotmail.com', 
            // note you need to use the bcrypt function here to hash your password
            'password' => '12345'
        ]);

        $response->assertRedirect('auth/login');
    }
}
