<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'planeta guru', 'url' => 'https://planeta.guru/', 'image_id' => 4],
            ['name' => 'clarovr', 'url' => 'https://clarovr.com/', 'image_id' => 4],
        ];

        SeederFunction::seed(Product::class, $products);
    }
}
