<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    /**
     * user should see login view page
     */
    public function test_user_see_login_view_page(): void
    {
        $response = $this->withViewErrors([])->view('auth.login');

        $response->assertSee('Sign In');
    }

    /**
     * if the user enter correct email and password should login to its account
     */
    public function test_user_can_login_to_its_account()
    {
        $registerData = [
            'email' => 'mohammed@company-dz.com',
            'password' => 'mohammed1234'
        ];

        $response = $this->call('POST', 'login', $registerData);

        $response->assertStatus(302);
    }
}
