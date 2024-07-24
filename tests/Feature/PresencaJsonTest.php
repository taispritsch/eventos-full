<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PresencaJsonTest extends TestCase
{
    /** @test */
    public function it_returns_a_valid_json_response()
    {
        $response = $this->get('/api/presencas');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'inscricao_id', 'data_presenca', 'created_at', 'updated_at']
        ]);
    }
}
