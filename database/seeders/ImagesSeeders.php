<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/jetz_slide%201.png',
                'description' => 'jetz 1',
                'image_type_id' => 6,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/jetz_slide%202.png',
                'description' => 'jetz 2',
                'image_type_id' => 6,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/landing-desktop%201.png',
                'description' => 'landing desktop soccer',
                'image_type_id' => 7,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/logo%201.svg',
                'description' => 'clarovr',
                'image_type_id' => 8,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/phone%201.png',
                'description' => 'Phone 1',
                'image_type_id' => 7,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/puzzleplanets_slide%201.png',
                'description' => 'puzzleplanets_slide 1',
                'image_type_id' => 6,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/puzzleplanets_slide%202.png',
                'description' => 'puzzleplanets_slide 2',
                'image_type_id' => 6,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/Rectangle%201.png',
                'description' => 'Background 1',
                'image_type_id' => 1,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/vr.png',
                'description' => 'VR',
                'image_type_id' => 7,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/zombieshooter%201.png',
                'description' => 'zombieshooter 1',
                'image_type_id' => 6,
            ],
            [
                'path' => 'https://assets.planeta.guru.s3.amazonaws.com/webBackendR2D2/images/Landings/zombieshooter%202.png',
                'description' => 'zombieshooter 2',
                'image_type_id' => 6,
            ],
        ];

        SeederFunction::seed(Image::class, $images);
    }
}
