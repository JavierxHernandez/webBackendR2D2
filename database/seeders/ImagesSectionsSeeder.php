<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\ImageSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagesSection = [
            ['image_id' => 3,   'section_id' => 1],
            ['image_id' => 8,   'section_id' => 1],

            ['image_id' => 9,   'section_id' => 2],
            ['image_id' => 5,   'section_id' => 2],
            ['image_id' => 3,   'section_id' => 2],

            ['image_id' => 8,   'section_id' => 3],
            ['image_id' => 11,  'section_id' => 3],
            ['image_id' => 1,   'section_id' => 3],
            ['image_id' => 2,   'section_id' => 3],
            ['image_id' => 6,   'section_id' => 3],
            ['image_id' => 7,   'section_id' => 3],
            ['image_id' => 10,  'section_id' => 3]
        ];

        SeederFunction::seed(ImageSection::class, $imagesSection);
    }
}
