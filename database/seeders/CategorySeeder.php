<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'web-multimédia']);
        Category::create(['name'=> 'design graphique']);
        Category::create(['name'=>'vidéo-3d']);
    }
}
