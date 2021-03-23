<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetIndexPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
