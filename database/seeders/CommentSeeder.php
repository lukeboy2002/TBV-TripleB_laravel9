<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'post_id' => '1',
            'user_id' => '4',
            'body' => 'Nihil ratione omnis reiciendis consequatur fugit a. Modi soluta fuga et alias autem neque saepe iusto.',
        ]);

        Comment::create([
            'post_id' => '1',
            'user_id' => '2',
            'body' => 'Omnis autem id minus ratione recusandae ipsam doloremque.',
        ]);

        Comment::create([
            'post_id' => '2',
            'user_id' => '2',
            'body' => 'Nihil ratione omnis reiciendis consequatur fugit a. Modi soluta fuga et alias autem neque saepe iusto.',
        ]);

        Comment::create([
            'post_id' => '2',
            'user_id' => '1',
            'body' => 'Omnis autem id minus ratione recusandae ipsam doloremque.',
        ]);
    }
}
