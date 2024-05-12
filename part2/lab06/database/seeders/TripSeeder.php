<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;
use Illuminate\Support\Carbon;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::insert(
            [
                [
                    'name' => 'Kolorado',
                    'continent' => 'Ameryka Północna',
                    'period' => '7',
                    'description' => 'jest wyżynno-górzystym stanem, którego średnia wysokość nad
                    poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado,
                    Mount Elbert, wznosi się na 4399 m n.p.m.',
                    'price' => '19000',
                    'img' => 'colorado.jpg',
                    'country_id' => '1',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                        'name' => 'Alaska',
                        'continent' => 'Ameryka Północna',
                        'period' => '10',
                        'description' => 'pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to
                        najwyższa część łańcucha Kordylierów z najwyższym szczytem
                        kontynentu - Denali (McKinley) (6194 m n.p.m.).',
                        'price' => '24000',
                        'img' => 'alaska.jpg',
                        'country_id' => '1',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
