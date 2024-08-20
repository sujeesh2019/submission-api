<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSubmission()
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'Sujeesh',
            'email' => 'sujeeshskn@gmail.com',
            'message' => 'This is a test message.'
        ]);

        $response->assertStatus(202);
        $this->assertDatabaseHas('submissions', [
            'name' => 'Sujeesh',
            'email' => 'sujeeshskn@gmail.com',
            'message' => 'This is a test message.'
        ]);
    }
}
