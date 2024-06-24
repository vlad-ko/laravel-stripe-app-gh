<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\ImportantOne;

class ImportantOneTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     public function testBrandNewFunctionHasNoTest() {

        $charge = Charge::factory()->make();
        $result = $charge->brandNewFunctionHasNoTest();
        $this->assertEquals('we have data', $result);
    }
 
}
