<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuenteHumanaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "dni" => $this->faker->unique()->randomNumber(8),
            "nro_celular" => $this->faker->phoneNumber,
            "nombres" => $this->faker->name,
            "apellidos" => $this->faker->lastName,
            "email" => $this->faker->unique()->email,
            "codigo" => $this->faker->unique()->randomNumber(6),
            "direccion" => $this->faker->address,
            "area_criminal" => $this->faker->randomElement(array("drogas", "otros")),
            "ubigeo" => "SURQUILLO - LIMA - LIMA ",
            "user_create" => User::all()->random()
        ];
    }
}
