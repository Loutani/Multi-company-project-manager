<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForgetPasswordTest extends TestCase
{
    use RefreshDatabase;

    /**
     * if the user click on forget password then should redirect to forget password form
     */
    public function test_user_can_see_forget_password_view_page(): void
    {
        $response = $this->withViewErrors([])->view('auth.passwords.email');

        $response->assertSee('Reset Password');
    }
}
