<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureUsuarios extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_usuarios()
    {
        $usuarios = Usuario::factory()->count(3)->create();

        $response = $this->getJson('/api/usuarios');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_create_a_usuario()
    {
        $data = [
            'nome' => 'Novo Usuario',
            'email' => 'usuario@exemplo.com',
        ];

        $response = $this->postJson('/api/usuarios', $data);

        $response->assertStatus(201)
                 ->assertJson($data);

        $this->assertDatabaseHas('usuarios', $data);
    }
}
