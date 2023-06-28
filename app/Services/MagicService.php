<?php

namespace App\Services;

/**
 * Used to create a bunch of random demo functions
 */
class MagicService {

    public $fruit = ['apple', 'orange', 'banana', 'pear', 'lemon'];

	public function uncoveredFunctionWhichReturnsSeven() {
        return 7;
    }

    public function anotherUncoveredFunction() {
        $var = 10;
  
        //let's add more lines
        foreach($this->fruit as $fruit) {
            if ($fruit === 'apple') {
                $var = 2;
            }
        }
        
        return $var;
    }

    public function getTen() {
        return 10;
    }

    public function getFive() {
        return 5;
    }

    public function checkCheckCheck() {
        return "check";
    }

    public function demoFunction()
    {
        return 42;
    }

    public function normalFunction() {
        return 50;
    }

    public function anotherFunction() {
        return 20;
    }

    public function uncoveredFunction() {
        return 40;
    }

    public function moreUncoveredCode() {
        return 45;
    }

    public function justAnotherOne() {
        return 45;
    }

    public function getEleven() {
        return 11;
    }

    public function getTwentySeven() {
        return 27;
    }
    
    public function getSeventy() {
        return 70;
    }

    public function getFortyTwo() {
        return 42;
    }

    public function newProductionFunction() {
        return ['important production data'];
    }

    public function uncoveredGetOneHundred() {
        return 100;
    }

    public function uncoveredGetSeventyTwo() {
        return 72;
    }

    public function getTwenty() {
        return 20;
    }

    public function getTwentyOne() {
        return 21;
    }

    public function getTwentyTwo() {
        return 22;
    }

    public function getTwentyThree() {
        return 23;
    }

    public function getTwentyFour() {
        return 24;
    }

    public function getTwentyFive() {
        return 25;
    }

    public function getTwentySix() {
        return 26;
    }

    public function getTwentyEight() {
        return 28;
    }

    public function getTwentyNine() {
        return 29;
    }
}