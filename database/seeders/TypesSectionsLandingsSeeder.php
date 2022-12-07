<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\TypeSectionLanding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSectionsLandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['description' => 'normal'],
            ['description' => 'grid'],
            ['description' => 'carousel'],
        ];

        SeederFunction::seed(TypeSectionLanding::class, $types);
    }
}
