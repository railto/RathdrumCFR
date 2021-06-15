<?php

test('the home page loads', function () {
        $response = $this->get('/');

        $response->assertSee('Rathdrum Community First Responders');
        $response->assertSee('New Website Coming Soon');
        $response->assertStatus(200);
    }
);
