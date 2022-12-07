<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\SectionLanding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionsLandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionsLandings = [
            [
                'landing_id' => 1,
                'section_id' => 1,
                'order_number' => 1
            ],
            [
                'landing_id' => 1,
                'section_id' => 2,
                'order_number' => 2
            ],
            [
                'landing_id' => 1,
                'section_id' => 3,
                'order_number' => 3
            ],
        ];

        SeederFunction::seed(SectionLanding::class, $sectionsLandings);
    }
}
