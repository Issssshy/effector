<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
                'post_id' => 1,
                'effector_id' => 1,
                'setting' => 'Level:12時, Gain:12時, Tone:12時',
        ]);
    }
}
