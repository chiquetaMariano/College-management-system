<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarreraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carrera::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $carrera_anios = array('1', '2', '3');
        return [
            'carrera_dn' => $this->faker->sentence($nbWords = 3),
            // 'carrera_anios' => $this->faker->randomElements($carrera_anios)[0],
            'carrera_anios' => 3,
            'carrera_resolucion' => $this->faker->word
        ];
    }
}
