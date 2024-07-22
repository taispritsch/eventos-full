<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureAutenticacao extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_authenticate_a_user()
    {
        $user = User::factory()->create([
            'email' => 'usuario@exemplo.com',
            'password' => bcrypt($password = 'password'),
        ]);

        $response = $this->postJson('/api/autenticacao', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'token',
                 ]);
    }
}
