<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'description_id' => 1,
                'title_id' => 1,
                'type_section_landing_id' => 1,
                'button_id' => 1,
                'sub_title_button_id' => 1,
                'background_color' => ''
            ],
            [
                'description_id' => 2,
                'title_id' => 2,
                'type_section_landing_id' => 1,
                'button_id' => 1,
                'sub_title_button_id' => 1,
                'background_color' => ''
            ],
            [
                'description_id' => 3,
                'title_id' => 3,
                'type_section_landing_id' => 2,
                'button_id' => 1,
                'sub_title_button_id' => 1,
                'background_color' => ''
            ]
        ];

        SeederFunction::seed(Section::class, $sections);
    }
}
