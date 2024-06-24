<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImportantOne extends Model
{
    use HasFactory;

    public function brandNewFunctionHasNoTest() {
        if ( is_object($this) ) {
            return 'we have data';
        }
        else {
            return 'we have no data';
        }
    }
    
}
