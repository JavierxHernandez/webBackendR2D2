<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\SubTitleButton;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubtitlesButonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subtitles = [
            [
                'text' => 'Por sólo $30 semanales'
            ]
        ];

        SeederFunction::seed(SubTitleButton::class, $subtitles);
    }
}
