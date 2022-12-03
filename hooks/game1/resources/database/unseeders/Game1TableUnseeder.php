<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Game1TableUnseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Skip if table does not exists.
        if (!Schema::hasTable('game1')) {
            return;
        }

        DB::table('game1')
            ->whereIn('name', ['foo', 'bar', 'baz'])
            ->delete();
    }
}
