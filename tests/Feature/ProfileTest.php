<?php

namespace Tests\Feature;

use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_user_can_see_profile_page(): void
    {
        $user = User::factory()->create();
        
        $this->actingAs($user)->get('/profile')->assertStatus(200);
    }
}
