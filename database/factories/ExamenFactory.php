<?php

namespace Database\Factories;

use App\Models\Examen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Examen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fecha = $this->faker->dateTimeBetween($startDate = 'now', $max = '+1 years');
        return [
            'fecha' => $fecha,
            'sede_id' => \App\Models\Sede::inRandomOrder()->first()->sede_id,
            'carrera_id' => \App\Models\Carrera::inRandomOrder()->first()->carrera_id,
            'division_id' => \App\Models\Division::inRandomOrder()->first()->division_id,
            'anio_id' => \App\Models\Anio::inRandomOrder()->first()->anio_id,
            'materia_id' => \App\Models\Materia::inRandomOrder()->first()->materia_id,
            'presidente' => \App\Models\Profesor::inRandomOrder()->first()->profesor_id,
            'vocal_1' => \App\Models\Profesor::inRandomOrder()->first()->profesor_id,
            'vocal_2' => \App\Models\Profesor::inRandomOrder()->first()->profesor_id,
            'llamado_id' => \App\Models\Llamado::inRandomOrder()->first()->llamado_id,
        ];
    }
}
