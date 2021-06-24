<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => Str::random(8),
            'description' => Str::random(50),
            'number' => rand(1,99),
        ]);
    }
}
