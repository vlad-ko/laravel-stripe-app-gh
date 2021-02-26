<?php

namespace Tests\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\ReportsController;

class ReportsControllerTest extends TestCase {

    public function testBasicReport() {
       $response = $this->get('/report/index');
       $response->assertStatus(200);
    }

}