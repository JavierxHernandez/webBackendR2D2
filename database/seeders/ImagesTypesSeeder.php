<?php

namespace Database\Seeders;

use App\Models\ImagesTypes;
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
            ['name' => 'datail'],
            ['name' => 'datail_mobile'],
        ];

        SeederFunction::seed(ImagesTypes::class, $types);
    }
}
