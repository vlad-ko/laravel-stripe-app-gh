<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportantOne extends Model
{

    public function brandNewFunctionHasNoTest() {
        if ( $_COOKIE['codecov'] === '' ) {
            return 'we have no cookie';
        }
        else {
            return 'we have cookies';
        }
    }
    
}
