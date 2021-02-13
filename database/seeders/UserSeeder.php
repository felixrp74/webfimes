<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        User::create([
            'name'=> 'fer@fer',
            'email'=> 'fer@fer',
            'escuela'=> 'ingenieria-sistemas',
            'password'=> bcrypt('fer@fer'),
        ]);

        User::factory(2)->create();
    }
}
