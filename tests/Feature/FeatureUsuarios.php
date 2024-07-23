<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureUsuarios extends TestCase
{
    /** @test */
    public function it_can_list_all_usuarios()
    {
        // Criar um mock de Usuario
        $usuarios = factory(Usuario::class, 3)->make();

        // Mockar a chamada ao método `all` do modelo Usuario
        Usuario::shouldReceive('all')
            ->once()
            ->andReturn($usuarios);

        // Fazer a requisição
        $response = $this->getJson('/api/usuarios');

        // Verificar a resposta
        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_create_a_usuario()
    {
        // Dados para criação do usuário
        $data = [
            'nome' => 'Novo Usuario',
            'email' => 'usuario@exemplo.com',
            'senha' => 'senha123', // Adicionar senha para o teste
        ];

        // Mockar a criação do usuário
        Usuario::shouldReceive('create')
            ->once()
            ->with($data)
            ->andReturn((object) $data);

        // Fazer a requisição
        $response = $this->postJson('/api/usuarios', $data);

        // Verificar a resposta
        $response->assertStatus(201)
                 ->assertJson($data);
    }
}
