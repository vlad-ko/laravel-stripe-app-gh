<?php

namespace App\Http\Controllers;


/**
 * Main controller to process "demo data"
 */
class DemoController extends Controller
{
	
	public function uncovered()  {
		return true;
	}

    public function moreUncoveredCode() {
        return 42;
    }
}