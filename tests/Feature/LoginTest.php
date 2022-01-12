<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_redirect_to_home_page_and_logged_in_after_login()
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
