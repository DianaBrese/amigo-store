<?php

namespace Database\Seeders;

use App\Models\ProductHasOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductHasOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductHasOrder::factory()->count(60)->create();
    }
}
