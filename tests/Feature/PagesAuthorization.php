<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesAuthorization extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function AccessAuthorizedAccount()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }
}
