<?php

namespace Tests\Feature;

use Tests\TestCase;

class ValidationUsuarioTest extends TestCase
{
    /** @test */
    public function it_creates_a_user_successfully()
    {
        $data = [
            'nome' => 'New User',
            'email' => 'newuser@example.com',
            'senha' => 'securepassword',
        ];

        $response = $this->post('/api/usuarios', $data);

        $response->assertStatus(201);

        $response->assertJsonFragment([
            'nome' => 'New User',
            'email' => 'newuser@example.com',
        ]);

        $this->assertDatabaseHas('usuarios', [
            'nome' => 'New User',
            'email' => 'newuser@example.com',
        ]);
    }
}
