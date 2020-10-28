<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StatusSeeder::class);
        $this->call(SeasonSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BacSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
