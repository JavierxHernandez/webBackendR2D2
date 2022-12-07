<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $providers = [
            ['name' => 'mx.claro.tiaxa'],
            ['name' => 'ar.claro.tiaxa'],
        ];

        SeederFunction::seed(Provider::class, $providers);
    }
}
