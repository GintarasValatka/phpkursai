<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RadarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 5, 5, 10, 10, 10),
            'number' => 'AAA555',
            'distance' => 100,
            'time' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
    }
}
