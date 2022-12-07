<?php

namespace Database\Seeders;

use App\Models\Description;
use App\Auxs\SeederFunction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descriptions = [
            ['description' => 'Disfruta de los mejores juegos y contenido en Realidad Virtual, Realidad Aumentada y 360, sin publicidad, donde quieras y cuando quieras.'],
            ['description' => 'Sólo ponte tus gafas VR y súbete a la acción. Descubre nuevos mundos, sólo con Claro VR. Suscríbete y sumérgete en universos fantasticos.'],
            ['description' => 'Un catálogo ilimitado, en la palma de tu mano. Terror, Acción, Aventuras, los juegos que buscas, están aquí. Todas las semanas, nuevos títulos para que vivas experiencias únicas.']
        ];

        SeederFunction::seed(Description::class, $descriptions);
    }
}
