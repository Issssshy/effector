<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
                'user_id' => 1,
                'post_id' => 1,
                'comment' => 'これは良い音',
                'star' => 3,
                'created_at' => new DateTime(),
        ]);
    }
}
