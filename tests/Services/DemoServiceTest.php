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

    public function testAnotherUncoveredFunction()
    {
        $this->assertEquals(2, $this->demoService->anotherUncoveredFunction());
    }

    public function testDemoFunction()
    {
        $this->assertEquals(42, $this->demoService->demoFunction());
    }
}
