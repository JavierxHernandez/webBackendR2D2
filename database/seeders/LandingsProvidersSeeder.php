<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\LandingProvider;
use Illuminate\Database\Seeder;

class LandingsProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $landingsProviders = [
            [
                'landing_id' => 1,
                'product_provider_id' => 1,
                'url' => 'landing-new-pro-max',
            ]
        ];

        SeederFunction::seed(LandingProvider::class, $landingsProviders);
    }
}
