<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImportantOne extends Model
{
    use HasFactory;

    public function brandNewFunctionHasNoTest() {
        if ( $_COOKIE['codecov'] === '' ) {
            return 'we have no cookie';
        }
        else {
            return 'we have cookies';
        }
    }
    
}
