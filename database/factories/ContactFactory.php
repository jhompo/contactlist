<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [  
            "nombre"            => $this->faker->name(),
            "apellidos"         => $this->faker->lastName(),
            "email"             => $this->faker->email(),
            "telefono"          => $this->faker->phoneNumber(),
            "genero"            => $this->faker->randomElement(['M','F']),            
            "fecha_nacimiento"  => $this->faker->date(),
            "direccion"         => $this->faker->address(),
            "id_tipo"           => $this->faker->randomElement([1, 2, 3]),
            "id_origen"         => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
