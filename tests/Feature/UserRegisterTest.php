<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    /**
     * Guest can get register view
     */
    public function test_register_form_can_be_rendered(): void
    {
        $view = $this->withViewErrors([])->view('auth.register');
 
        $view->assertSee('Sign Up');
    }

    /**
     * Guest can register and redirect to view
     */
    public function test_register_action_must_return_success_message()
    {
        $registerData = [
            'name' => 'Mohammed',
            'email' => 'mohammed@company-dz.com',
            'password' => 'mohammed1234',
            'password_confirmation' => 'mohammed1234',
        ];

        $response = $this->call('POST', 'register', $registerData);

        $response->assertStatus(302);
    }

    /**
     * if we don't send email we should catch it as error
     */
    public function test_email_is_required_should_show_if_you_dont_send_it()
    {
        $registerData = [
            'name' => 'Mohammed',
            'password' => 'mohammed1234',
            'password_confirmation' => 'mohammed1234',
        ];

        $response = $this->call('POST', 'register', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['email' => 'The email field is required.']);
    }

    /**
     * if we don't send name we should catch it as error
     */
    public function test_name_is_required_should_show_if_you_dont_send_it()
    {
        $registerData = [
            'email' => 'mohammed@company-dz.com',
            'password' => 'mohammed1234',
            'password_confirmation' => 'mohammed1234',
        ];

        $response = $this->call('POST', 'register', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['name' => 'The name field is required.']);
    }

    /**
     * if we don't send password we should catch it as error
     */
    public function test_password_is_required_should_show_if_you_dont_send_it()
    {
        $registerData = [
            'name' => 'Mohammed',
            'email' => 'mohammed@company-dz.com',
            'password_confirmation' => 'mohammed1234',
        ];

        $response = $this->call('POST', 'register', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['password' => 'The password field is required.']);
    }

    /**
     * if the password and password_confirmation not match we should catch it as error
     */
    public function test_password_is_miss_match_should_show()
    {
        $registerData = [
            'name' => 'Mohammed',
            'email' => 'mohammed@company-dz.com',
            'password' => 'mohammed1234',
            'password_confirmation' => 'mohammed1234dsqdsqsq',
        ];

        $response = $this->call('POST', 'register', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['password' => 'The password field confirmation does not match.']);
    }

    /**
     * if the format of email is not valid we should catch it as error
     */
    public function test_email_valid_format_should_show()
    {
        $registerData = [
            'name' => 'Mohammed',
            'email' => 'mohammed-company-dz.com',
            'password' => 'mohammed1234',
            'password_confirmation' => 'mohammed1234dsqdsqsq',
        ];

        $response = $this->call('POST', 'register', $registerData);

        $response->assertStatus(302);

        $response->assertSessionHasErrors(['email' => 'The email field must be a valid email address.']);
    }
}
