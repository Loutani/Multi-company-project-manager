<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

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

    /**
     * if the user enter wrong email and correct password then should get error message
     */
    public function test_user_enter_wrong_email_and_correct_password()
    {
        $registerData = [
            'email' => 'mohammed2023@company-dz.com',
            'password' => 'mohammed1234'
        ];

        $response = $this->call('POST', 'login', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['email' => 'These credentials do not match our records.']);
    }

    /**
     * if the user enter wrong password and correct email then should get error message
     */
    public function test_user_enter_wrong_password_and_correct_email()
    {
        $registerData = [
            'email' => 'mohammed@company-dz.com',
            'password' => 'mohammed1234dsqdqs'
        ];

        $response = $this->call('POST', 'login', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['email' => 'These credentials do not match our records.']);
    }

    /**
     * if user loggedand try logged again should redirect to home
     */
    public function test_user_logged_before_but_try_to_login_again()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('login')->assertRedirect(RouteServiceProvider::HOME);
    }
}
