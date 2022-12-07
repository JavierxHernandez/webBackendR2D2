<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TitlesSeeder::class,
            ImagesTypesSeeder::class,
            ProductsSeeder::class,
            ProvidersSeeder::class,
            DescriptionsSeeder::class,
            ProductsProvidersSeeder::class,
            ButtonsSeeder::class,
            SubtitlesButonsSeeder::class,
            LandingsSeeder::class,
            LandingsProvidersSeeder::class,
            TypesSectionsLandingsSeeder::class,
            ImagesSeeders::class,
            SectionsSeeder::class,
            ImagesSectionsSeeder::class,
            SectionsLandingsSeeder::class
        ]);
    }
}
