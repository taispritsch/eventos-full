<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
     /** @test */
     public function it_tests_the_usuarios_route_status()
     {
         $response = $this->get('/api/usuarios');
         $response->assertStatus(200);
     }
}
