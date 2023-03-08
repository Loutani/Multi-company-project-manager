<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
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
}
