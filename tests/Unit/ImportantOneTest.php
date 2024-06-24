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

        $importantOne = ImportantOne::factory()->make();
        $result = $importantOne->brandNewFunctionHasNoTest();
        $this->assertEquals('we have data', $result);
    }
 
}
