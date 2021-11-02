<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductBatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::inRandomOrder()
                ->first(),
            'custom_id' => $this->faker->randomNumber(8),
            'manufactured_at' => $this->faker->dateTime(),
            'batch_quantity' => $this->faker->numberBetween(1,9999)
        ];
    }
}
