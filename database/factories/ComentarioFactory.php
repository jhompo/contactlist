<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id_contact"  => $this->faker->numberBetween(1,10),
            "comentario"  => $this->faker->text(30),
        ];
    }
}
