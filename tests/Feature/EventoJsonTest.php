<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventoJsonTest extends TestCase
{
    /** @test */
    public function it_returns_a_valid_json_response()
    {
        $response = $this->get('/api/eventos');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'nome', 'data', 'hora', 'created_at', 'updated_at']
        ]);

        /*TESTEEEEEEEEEEE*/
    }
}
