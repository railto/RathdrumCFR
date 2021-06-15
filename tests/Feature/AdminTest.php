<?php

test('logged out user accessing admin redirects to login', function () {
    $response = $this->get('/admin');

    $response->assertRedirect('/admin/login');
    $response->assertStatus(302);
});
