<?php

namespace App\Services;

/**
 * Used to create a bunch of random demo functions
 */
class DemoService {

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

    public function newFunctionReturnsTrue() {
        return true;
    }

    public function newService() {
        return 15;
    }

    public function demoFunction()
    {
        return 42;
    }

    public function normalFunction() {
        return 50;
    }
}