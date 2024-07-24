<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventoSingleRouteTest extends TestCase
{
    
    /** @test */
    public function it_tests_the_single_evento_route_status()
    {
        $response = $this->get('/api/eventos/3');
        $response->assertStatus(200);
    }
}
