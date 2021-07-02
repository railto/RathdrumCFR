<?php

use function Pest\Laravel\get;

test(
    'the homepage loads',
    function () {
        get('/')
            ->assertStatus(200)
            ->assertSee('Rathdrum Community First Responders')
            ->assertSee("We are currently working on a new website");
    }
);
