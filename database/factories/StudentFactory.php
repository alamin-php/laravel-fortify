<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_id' => $this->faker->numberBetween($min = 3, $max = 16),
            'name'     => $this->faker->name(),
            'roll'     => $this->faker->numberBetween($min = 11, $max = 100),
            'phone'     => $this->faker->phoneNumber(),
            'address'     => $this->faker->address(),
        ];
    }
}
