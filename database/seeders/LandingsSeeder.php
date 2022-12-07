<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Landing;
use Illuminate\Database\Seeder;

class LandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $landings = [
            [
                'description' => 'Landing 2.0 para mexico.',
                'footer_text' => 'Con tu suscripción tendrás acceso a  juegos y videos de realidad virtual y aumentada de manera ilimitada.',
                'number_of_sections' => 3,
            ]
        ];

        SeederFunction::seed(Landing::class, $landings);
    }
}
