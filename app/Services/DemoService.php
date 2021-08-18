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

}