<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureInscricoes extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_inscricoes()
    {
        $inscricoes = Inscricao::factory()->count(3)->create();

        $response = $this->getJson('/api/inscricoes');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_create_an_inscricao()
    {
        $data = [
            'evento_id' => 1,
            'usuario_id' => Usuario::factory()->create()->id,
        ];

        $response = $this->postJson('/api/inscricoes', $data);

        $response->assertStatus(201)
                 ->assertJson($data);

        $this->assertDatabaseHas('inscricoes', $data);
    }
}
