<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class EffectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('effectors')->insert([
                'name' => 'Blues Driver',
                'image_url' => 'anyURL',
                'description' => '1番最初のエフェクター',
        ]);
    }
}
