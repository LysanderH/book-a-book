<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            '2181',
            '2182',
            '2183',
            '2184',
            '2185',
            '2189',
            '2190',
            '2281',
            '2283',
            '2284',
            '2285',
            '2381',
            '2383',
            '2384',
        ];
        foreach ($groups as $group) {
            Group::create([
                'name' => $group
            ]);
        }
    }
}
