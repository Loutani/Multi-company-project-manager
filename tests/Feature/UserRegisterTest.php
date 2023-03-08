<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
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
}
