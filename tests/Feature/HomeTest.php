<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function theHomePageLoads(): void
    {
        $response = $this->get('/');

        $response->assertSee('Rathdrum Community First Responders');
        $response->assertSee('New Website Coming Soon');
        $response->assertStatus(200);
    }
}
