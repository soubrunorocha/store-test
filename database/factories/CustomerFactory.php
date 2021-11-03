<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'tax_number' => $this->faker->numberBetween(11111111111, 99999999999),
            'birth_date' => $this->faker->date()
        ];
    }
}
