<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => 1,
            'email' => $this->faker->email(),
            'password' => Hash::make('12345678'),
            'name' => $this->faker->name(),
            'date_of_birth' => $this->faker->dateTimeBetween('1920-01-01', '2020-12-31')->format('Y-m-d'),
            'phone_number' => $this->faker->numerify("081########"),
        ];
    }
}
