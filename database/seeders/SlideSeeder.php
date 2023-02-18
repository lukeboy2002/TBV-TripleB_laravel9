<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::factory()->create([
            'title' => 'TripleB',
            'subtitle' => 'Gent 2013',
            'image' => '/slides/1.jpg',
            'status' => '1',
        ]);

        Slide::factory()->create([
            'title' => 'TripleB',
            'subtitle' => 'Carnaval 2023',
            'image' => '/slides/2.jpg',
            'status' => '1',
        ]);
    }
}
