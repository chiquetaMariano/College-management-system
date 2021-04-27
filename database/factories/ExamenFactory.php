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
        return [
            'fecha' =>,
            'sede_id' =>,
            'carrera_id' =>,
            'division_id' =>,
            'anio_id' =>,
            'materia_id' =>,
            'vocal_1' =>,
            'vocal_2' =>,
            'llamado_id' =>,
        ];
    }
}
