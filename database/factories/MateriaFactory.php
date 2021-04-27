<?php

namespace Database\Factories;

use App\Models\Materia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'materia_dn' => $this->faker->sentence($nbWords = 3),
            'carrera_id' => \App\Models\Carrera::inRandomOrder()->first()->carrera_id,
            'anio_id' => \App\Models\Anio::inRandomOrder()->first()->anio_id,
        ];
    }
}
