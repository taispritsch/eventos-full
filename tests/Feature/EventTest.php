<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventTest extends TestCase
{

    /** @test */
    public function it_tests_the_eventos_route_status()
    {
        $response = $this->get('/api/eventos');
        $response->assertStatus(200);
    }

    /** @test */
    public function it_tests_the_single_evento_route_status()
    {
        $response = $this->get('/api/eventos/3');
        $response->assertStatus(200);
    }
}
