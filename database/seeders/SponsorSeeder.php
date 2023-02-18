<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sponsor::create([
            'name' => 'Bouwgroep Midden Brabant',
            'link' => 'https://www.bouwgroep-mb.nl/',
            'image' => '/sponsors/1.jpeg',
        ]);

        Sponsor::create([
            'name' => 'Engel',
            'link' => 'https://nl.linkedin.com/in/patrick-engel-a6008314',
            'image' => '/sponsors/2.png',
        ]);

        Sponsor::create([
            'name' => 'LA-Online',
            'link' => 'http://la-online.nl',
            'image' => '/sponsors/3.jpg',
        ]);
    }
}
