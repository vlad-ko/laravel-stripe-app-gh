<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Charge;

class ChargeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetDataForReport()
    {
        $charge = Charge::factory()->make();
        $result = $charge->getDataForReport();
        $this->assertNotEmpty($result);
    }

    public function testUncoveredFunction() {

        $charge = Charge::factory()->make();
        $result = $charge->uncoveredFunction();
        $this->assertEquals(80, $result);
    }

    public function testReturnSeventySix() {

        $charge = Charge::factory()->make();
        $result = $charge->returnSeventySix();
        $this->assertEquals(76, $result);
    }
}
