<?php

use function Pest\Laravel\get;

test(
    'a guest can not access admin page',
    function () {
        get('/admin')
            ->assertStatus(302)
            ->assertRedirect('/admin/login');
    }
);

