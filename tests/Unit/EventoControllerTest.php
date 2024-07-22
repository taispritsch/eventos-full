<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Evento;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventoControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_return_all_eventos()
    {
        Evento::create(['nome' => 'Evento 1', 'data' => '2024-07-22', 'hora' => '10:00:00']);
        Evento::create(['nome' => 'Evento 2', 'data' => '2024-07-23', 'hora' => '14:00:00']);

        $response = $this->getJson('/api/eventos');

        $response->assertStatus(200)
                 ->assertJson([
                     ['nome' => 'Evento 1'],
                     ['nome' => 'Evento 2']
                 ]);
    }
}
