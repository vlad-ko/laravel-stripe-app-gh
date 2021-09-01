<?php

namespace Tests\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\DemoController;

class DemoControllerTest extends TestCase {

    public function testUncoveredFunction() {
       $response = $this->get('/uncovered');
       $response->assertStatus(200);
    }
}