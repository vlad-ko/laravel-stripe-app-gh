<?php

namespace Tests\Services;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\ChargeParser;

class ChargeParserTest extends TestCase
{
    protected $parser;

    public function setUp(): void
    {
        parent::setUp();
        $this->parser = new ChargeParser;
    }

    /**
     * Test processing of charge
     * @return void
     */
    public function testProcessEachResponse()
    {
        $stripeChargeResponse['data'] = [
            [
                'id' => 'ch_1ITpVs2eZvKYlo2CeVA9KKvR',
                'object' => 'charge',
                'amount' => 100
            ],
            [
                'id' => 'qiupreryiqrweo0234734',
                'object' => 'charge',
                'amount' => 50
            ]
        ];

        $this->parser->process($stripeChargeResponse);
        $this->assertEquals(2, $this->parser->chargesProcessed);
    }

    public function testCalculator() {
        $response = $this->parser->calculator(2,2);
        $this->assertEquals(4, $response);
    }
    
    public function testSubtractor() {
        $response = $this->parser->subtractor(4,2);
        $this->assertEquals(2, $response);
    }

    public function testUncovered() {
        $response = $this->parser->uncoveredFunction(1);
        $this->assertEquals(1, $response);
    }

    public function testGetSeven() {
        $response = $this->parser->getSeven();
        $this->assertEquals(7, $response);
    }
}
