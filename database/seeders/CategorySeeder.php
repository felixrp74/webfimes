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
        Category::create([
            'name'=> 'Ingenieria-Mecanica',
            'slug'=> 'ingenieria-mecanica',
        ]);
        Category::create([
            'name'=> 'Ingenieria-Electronica',
            'slug'=> 'ingenieria-electronica',
        ]);
        Category::create([
            'name'=> 'Ingenieria-Sistemas',
            'slug'=> 'ingenieria-sistemas',
        ]);
        Category::create([
            'name'=> 'General',
            'slug'=> 'general',
        ]);

    }
}
