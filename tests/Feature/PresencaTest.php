<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PresencaTest extends TestCase
{
    /** @test */
    public function it_tests_the_presenca_route_status()
    {
        $response = $this->get('/api/presencas');
        $response->assertStatus(200);
    }
}
