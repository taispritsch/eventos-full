<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureEmail extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_send_an_email()
    {
        $user = User::factory()->create();

        $data = [
            'email' => $user->email,
            'subject' => 'Test Email',
            'message' => 'This is a test email.',
        ];

        $response = $this->postJson('/api/emails', $data);

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Email sent successfully.'
                 ]);
    }
}
