<?php

namespace Database\Factories;

use App\Models\Charge;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ChargeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Charge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => 99,
            'status' => 'active',
            'created' => now(),
            'created_at' => now(),
            'object' => 'charge',
            'stripe_id' => Str::random(10),
        ];
    }
}
