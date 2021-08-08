<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fecha = $this->faker->dateTimeBetween($startDate = '-1 years', $max = 'now');
        return [
            'titulo' => $this->faker->sentence,
            'cuerpo' => $this->faker->text,
            'adjunto' => $this->faker->optional()->imageUrl,
            'fecha' => $fecha,
            'ocultar' => $this->faker->boolean(),
            'carrera_id' => \App\Models\Carrera::inRandomOrder()->first()->carrera_id,
            'anio_id' => \App\Models\Anio::inRandomOrder()->first()->anio_id,
        ];
    }
}
