<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['commandé', 'payé', 'disponible', 'livré'];
        foreach ($status as $stat) {
            Status::create([
                'name' => $stat,
            ]);
        }

    }
}
