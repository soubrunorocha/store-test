<?php

namespace Database\Seeders;

use App\Models\ProductBatch;
use Illuminate\Database\Seeder;

class ProductBatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductBatch::factory()
            ->count(50)
            ->create();
    }
}
