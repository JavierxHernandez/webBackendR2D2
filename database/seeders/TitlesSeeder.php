<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Title;
use Illuminate\Database\Seeder;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            ['title_1' => 'Juegos ilimitados,', 'title_2' => 'sin publicidad'],
            ['title_1' => 'Realidad Virtual', 'title_2' => 'como nunca viste'],
            ['title_1' => 'El mejor contenido', 'title_2' => 'en la palma de tu mano'],
        ];

        SeederFunction::seed(new Title, $titles);
    }
}
