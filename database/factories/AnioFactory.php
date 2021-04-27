<?php

namespace Database\Factories;

use App\Models\Anio;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anio' => $this->faker->numberBetween(1, 3)
        ];
    }
}
