<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InscricaoTest extends TestCase
{
   /** @test */
   public function it_tests_the_inscricao_route_status()
   {
       $response = $this->get('/api/inscricoes');
       $response->assertStatus(200);
   }
}
