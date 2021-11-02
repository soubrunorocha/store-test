<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = Product::inRandomOrder()
            ->first();

        return [
            'sale_id' => Sale::inRandomOrder()
                ->first(),
            'product_id' => $product->id,
            'quantity' => $this->faker->numberBetween(1,9999),
            'value' => $product->value
        ];
    }
}
