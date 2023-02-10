<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encuesta>
 */
class EncuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'enc_name' => $this->faker->sentence(),
            'periodo' => $this->faker->paragraph(),
            'estado' => $this->faker->randomElement(['activo','inactivo'])
        ];
    }
}
