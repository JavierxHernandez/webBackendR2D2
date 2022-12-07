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
                'type_section_landing' => 1,
                'button_id' => 1,
                'subtitle_button_id' => 1,
                'background_color' => null
            ],
            [
                'description_id' => 2,
                'title_id' => 2,
                'type_section_landing' => 1,
                'button_id' => 1,
                'subtitle_button_id' => 1,
                'background_color' => null
            ],
            [
                'description_id' => 3,
                'title_id' => 3,
                'type_section_landing' => 2,
                'button_id' => 1,
                'subtitle_button_id' => 1,
                'background_color' => null
            ]
        ];

        SeederFunction::seed(Section::class, $sections);
    }
}
