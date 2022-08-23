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
}