<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class)
            ->call(CustomerSeeder::class)
            ->call(ProductSeeder::class)
            ->call(SaleSeeder::class)
            ->call(ProductBatchSeeder::class)
            ->call(SaleProductSeeder::class);
    }
}
