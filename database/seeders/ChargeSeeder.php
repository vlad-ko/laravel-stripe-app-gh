<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Charge;

class ChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Charge::factory()->count(50)->hasOutcome(50)->create();
    }
}
