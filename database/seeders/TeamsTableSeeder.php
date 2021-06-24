<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => Str::random(8),
            'image' => Str::random(10).'.png'
        ]);
    }
}
