<?php

namespace Tests\Services;

use Tests\TestCase;
use App\Services\DemoService;

class DemoServiceTest extends TestCase
{
    protected $parser;

    public function setUp(): void
    {
        parent::setUp();
        $this->demoService = new DemoService;
    }

    /**
     * Test a demo function 
     * @return void
     */
    public function testUncoveredFunctionWhichReturnsSeven() {
        $this->assertEquals(7, $this->demoService->uncoveredFunctionWhichReturnsSeven());
    }
}
