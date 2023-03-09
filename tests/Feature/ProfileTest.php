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
        
        $this->actingAs($user)->get('/profile/' . $user->profile->id)->assertStatus(200);
    }

    public function test_only_logged_in_user_can_see_profile_page()
    {

        $this->get('/profile/' . 5)->assertRedirect('/login');
    }

    public function test_user_can_see_edit_view()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/profile/' . $user->profile->id . '/edit')->assertStatus(200)->assertSee($user->name);
    }

    public function test_user_can_update_profile()
    {
        $user = User::factory()->create();

        $updatedDate = [
            'address' => 'new address',
            'phone' => 'new phone',
            'birthdate' => '04-04-1993',
            'bio' => 'new bio',
            'job' => 'new job',
            '_method' => 'PUT',
            'id' => $user->profile->id
        ];

        $this->actingAs($user)->put('/profile', $updatedDate)->assertStatus(302);

        $updatedProfile = Profile::find($user->profile_id);

        $this->assertEquals($updatedProfile->address, $updatedDate['address']);
        $this->assertEquals($updatedProfile->phone, $updatedDate['phone']);
        $this->assertEquals($updatedProfile->birthdate->format('d-m-Y'), $updatedDate['birthdate']);
        $this->assertEquals($updatedProfile->bio, $updatedDate['bio']);
        $this->assertEquals($updatedProfile->job, $updatedDate['job']);
    }
}
