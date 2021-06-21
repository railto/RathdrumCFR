<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /** @test */
    public function aGuestCanNotAccessAdminPage(): void
    {
        $response = $this->get('/admin');

        $this->assertGuest();
        $response->assertRedirect('/admin/login');
        $response->assertStatus(302);
    }
}
