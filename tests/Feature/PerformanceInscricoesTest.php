<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PerformanceInscricoesTest extends TestCase
{
    /** @test */
    public function it_responds_within_a_reasonable_time()
    {
        $startTime = microtime(true);

        $response = $this->get('/api/inscricoes');

        $endTime = microtime(true);
        $duration = ($endTime - $startTime) * 1000; 

        $response->assertStatus(200);

        $this->assertLessThan(200, $duration, "A resposta demorou mais de 200 milissegundos.");
    }
}
