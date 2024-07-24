<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventosRouteTest extends TestCase
{
    /** @test */
    public function it_tests_the_eventos_route_status()
    {
        $response = $this->get('/api/eventos');
        $response->assertStatus(200);
    }
}
