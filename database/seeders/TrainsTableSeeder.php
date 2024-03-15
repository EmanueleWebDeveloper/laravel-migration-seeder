<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker; // Importa il generatore di dati falsi

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'Azienda' => $faker->company,
                'Stazione_partenza' => $faker->city,
                'Stazione_arrivo' => $faker->city,
                'Orario_partenza' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Orario_arrivo' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Codice_Treno' => $faker->unique()->ean8,
                'Numero_Carrozze' => $faker->numberBetween($min = 1, $max = 10),
                'In_orario' => $faker->boolean,
                'Cancellato' => $faker->boolean,
            ]);
        }
    }
}
