<?php

namespace Database\Seeders;

use App\Auxs\SeederFunction;
use App\Models\Button;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ButtonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buttons = [
            ['text' => 'Suscribirme', 'action' => 'https://portal.shop/index.php/suscripcion-claro-vr1']
        ];

        SeederFunction::seed(Button::class, $buttons);
    }
}
