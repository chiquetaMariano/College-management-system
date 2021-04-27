<?php

namespace Database\Factories;

use App\Models\Sede;
use Illuminate\Database\Eloquent\Factories\Factory;

class SedeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sede::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sede_dn' => $this->faker->city,
            'sede_dire_calle' => $this->faker->streetName,
            'sede_dire_altura' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
