<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureEventos extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_eventos()
    {
        $eventos = Evento::factory()->count(3)->create();

        $response = $this->getJson('/api/eventos');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_show_an_evento()
    {
        $evento = Evento::factory()->create();

        $response = $this->getJson('/api/eventos/' . $evento->id);

        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $evento->id,
                     'nome' => $evento->nome,
                 ]);
    }
}
