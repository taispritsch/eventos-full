<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FalhaPropositalTest extends TestCase
{
    public function testFalhaProposital()
    {
        $this->assertTrue(false, "Este teste está destinado a falhar.");
    }
}
