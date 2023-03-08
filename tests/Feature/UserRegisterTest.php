<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_register_form_can_be_rendered(): void
    {
        $view = $this->view('auth.register');
 
        $view->assertSee('Sign Up');
    }
}
