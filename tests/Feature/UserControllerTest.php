<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_page()
    {
        // Generate a test user
        Artisan::call('db:seed --class=UserSeeder');
        // Fetch the user
        $user = User::whereName('johenel')->first();
        // Make sure user is fetched
        $this->assertTrue(!empty($user));
        // Request for the user page
        $response = $this->get("/users/{$user->id}");

        $response->assertStatus(200);
    }
}
