<?php

namespace Database\Factories;

use App\Models\Outcome;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OutcomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Outcome::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'network_status' => 200,
            'reason' => 'success',
            'risk_level' => 'low',
            'created_at' => now(),
            'rule' => 'this is a rule',
            'type' => 'normal transaction'
        ];
    }
}
