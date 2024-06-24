<?php

namespace Database\Factories;

use App\Models\ImportantOne;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ImportantOneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImportantOne::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => 99,
            'status' => 'active',
            'created' => now(),
            'created_at' => now(),
            'object' => 'important_row',
            'transaction_id' => Str::random(10),
        ];
    }
}
