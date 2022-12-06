<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\ProductProvider;
use Illuminate\Database\Seeder;

class ProductsProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsProviders = [
            [
                'provider_id' => 1,
                'product_id' => 1,
                'term_and_condition_url' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/terms/term-mx-1.html',
                'subscription_url' => 'https://portal.shop/index.php/suscripcion-claro-vr1'
            ]
        ];

        SeederFunction::seed(ProductProvider::class, $productsProviders);
    }
}
