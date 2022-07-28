<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_comment()
    {
        // Generate a test user
        Artisan::call('db:seed --class=UserSeeder');
        // Fetch the user
        $user = User::whereName('johenel')->first();
        // Make sure user is fetched
        $this->assertTrue(!empty($user));
        // Create a comment
        $response = $this->post("users/{$user->id}/comments", [
            'id' => $user->id,
            'comments' => 'This is a test comment.',
            'password' => env('STATIC_PASSWORD')
        ]);
        // Assert that the request returns 200
        $response->assertOk();
    }
}
