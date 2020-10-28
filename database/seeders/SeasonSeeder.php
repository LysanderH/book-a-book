<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::create([
            'start_year'=> '2019',
            'end_year'=> '2020',
            'archived'=> true
        ]);
        Season::create([
            'start_year'=> '2020',
            'end_year'=> '2021'
        ]);
    }
}
