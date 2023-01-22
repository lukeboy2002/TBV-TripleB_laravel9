<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'photo_path' => '/images/slides/1.jpg',
            'status' => '1',
        ]);
    }
}
