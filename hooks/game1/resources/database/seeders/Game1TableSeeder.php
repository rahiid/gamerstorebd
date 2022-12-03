<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Game1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Don't add data if the data is already there
        if (DB::table('game1')->count() > 0) {
            return;
        }

        DB::table('game1')->insert([
            ['name' => 'foo'],
            ['name' => 'bar'],
            ['name' => 'baz'],
        ]);
    }
}
