<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $sponsor= Sponsor::create([
            'name' => 'Bouwgroep Midden Brabant',
            'link' => 'https://www.bouwgroep-mb.nl/',
            'thumbnail_path' => '/images/sponsors/1.jpeg',
        ]);

        $sponsor= Sponsor::create([
            'name' => 'Engel',
            'link' => 'https://nl.linkedin.com/in/patrick-engel-a6008314',
            'thumbnail_path' => '/images/sponsors/2.png',
        ]);

        $sponsor= Sponsor::create([
            'name' => 'LA-Online',
            'link' => 'http://la-online.nl',
            'thumbnail_path' => '/images/sponsors/3.jpg',
        ]);
    }
}
