<?php

namespace Database\Seeders;

use App\Models\SaleProduct;
use Illuminate\Database\Seeder;

class SaleProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SaleProduct::factory()
            ->count(50)
            ->create();
    }
}
