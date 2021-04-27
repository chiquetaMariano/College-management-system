<?php

namespace Database\Factories;

// use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LlamadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $llamados = array('Febrero', 'Marzo', 'Agosto', 'Noviembre', 'Diciembre');

        return [
            'llamado' => $faker->randomElements($llamados)
        ];
    }
}
