<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function theHomePageLoads(): void
    {
        $response = $this->get('/');

        $response->assertSee('Rathdrum Community First Responders');
        $response->assertSee("We are currently working on a new website");
        $response->assertStatus(200);
    }
}
