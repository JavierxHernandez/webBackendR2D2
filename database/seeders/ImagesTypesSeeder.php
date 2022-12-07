<?php

namespace Database\Seeders;

use App\Models\ImageType;
use App\Auxs\SeederFunction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'background'],
            ['name' => 'thumbnail'],
            ['name' => 'thumbnail_mobile'],
            ['name' => 'background_mobile'],
            ['name' => 'avatar'],
            ['name' => 'detail'],
            ['name' => 'detail_mobile'],
            ['name' => 'principal'],
            ['name' => 'logo'],
        ];

        SeederFunction::seed(ImageType::class, $types);
    }
}
