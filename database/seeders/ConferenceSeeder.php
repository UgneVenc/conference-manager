<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        $conferences = [
            [
                'title' => 'Interneto technologijų konferencija',
                'description' => 'Pranešimai apie interneto sistemų kūrimą.',
                'conference_date' => '2027-03-12',
                'address' => 'Saulėtekio al. 9, Vilnius',
            ],
            [
                'title' => 'Duomenų inžinerijos konferencija',
                'description' => 'Diskusijos apie duomenų bazes ir analizę.',
                'conference_date' => '2027-04-16',
                'address' => 'Studentų g. 50, Kaunas',
            ],
            [
                'title' => 'Skaitmeninio dizaino konferencija',
                'description' => 'Praktinės sesijos apie prieinamą sąsajų dizainą.',
                'conference_date' => '2027-05-21',
                'address' => 'H. Manto g. 84, Klaipėda',
            ],
        ];

        foreach ($conferences as $conference) {
            Conference::updateOrCreate(
                [
                    'title' => $conference['title'],
                    'conference_date' => $conference['conference_date'],
                ],
                $conference,
            );
        }
    }
}