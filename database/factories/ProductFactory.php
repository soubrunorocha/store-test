<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName(). " " . $this->faker->jobTitle(),
            'custom_id' => $this->faker->randomNumber(8),
            'batch_number' => $this->faker->numberBetween(1000,9999),
            'color' => $this->faker->colorName(),
            'description' => $this->faker->sentence(),
            'value' => $this->faker->randomFloat(2, 0, 99999),
        ];
    }
}
