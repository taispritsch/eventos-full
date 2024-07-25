<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuarioJsonTest extends TestCase
{
    /** @test */
    public function it_returns_a_valid_json_response()
    {
        $response = $this->get('/api/usuarios');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'nome', 'email', 'senha', 'created_at', 'updated_at', 'nova_coluna']
        ]);
    }
}
