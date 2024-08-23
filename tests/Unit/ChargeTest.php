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

    public function testReturnDataSet() {

        $charge = Charge::factory()->make();
        $result = $charge->returnDataSet();
        $this->assertEquals('data set', $result);
    }
    
    public function testUncoveredUnitTestFuction() {

        $charge = Charge::factory()->make();
        $result = $charge->uncoveredUnitTestFunction();
        $this->assertEquals('data', $result);
    }

    public function testAddSomeFunctions() {

        $charge = Charge::factory()->make();
        $result = $charge->addSomeFunctions();
        $this->assertTrue($result);

    }

    public function testAddingAsecondFunction() {

        $charge = Charge::factory()->make();
        $result = $charge->addingAsecondFunction();
        $this->assertTrue($result);

    }

    public function testMoreDataFound() {

        $charge = Charge::factory()->make();
        $result = $charge->moreDataFound();
        $this->assertTrue($result);

    }

}
