<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeaturePresencas extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_presencas()
    {
        $presencas = Presenca::factory()->count(3)->create();

        $response = $this->getJson('/api/presencas');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_create_a_presenca()
    {
        $data = [
            'evento_id' => 1,
            'usuario_id' => User::factory()->create()->id,
        ];

        $response = $this->postJson('/api/presencas', $data);

        $response->assertStatus(201)
                 ->assertJson($data);

        $this->assertDatabaseHas('presencas', $data);
    }
}
