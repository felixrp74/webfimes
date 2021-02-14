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
            'name'=> 'Fernando Merma',
            'email'=> 'fer@fer',
            'escuela'=> 'ingenieria-sistemas',
            'password'=> bcrypt('fer@fer'),
        ])->assignRole('Admin'); // 'Admin' de la linea 20 de archivo 'RoleSeeder.php'

        User::create([
            'name'=> 'Ing. Milder Zanabria',
            'email'=> 'milder@gmail.com',
            'escuela'=> 'ingenieria-sistemas',
            'password'=> bcrypt('Milder.2milder'),
        ])->assignRole('Admin'); // 'Admin' de la linea 20 de archivo 'RoleSeeder.php'

        User::create([
            'name'=> 'MSc Julio Fredy Chura Acero',
            'email'=> 'julio@gmail.com',
            'escuela'=> 'ingenieria-mecanica',
            'password'=> bcrypt('Julio.1mecanica'),
        ])->assignRole('Responsable'); // 'Responsable' de la linea 21 de archivo 'RoleSeeder.php'

        User::create([
            'name'=> 'MSc Edwin Chambi Mamani',
            'email'=> 'edwin@gmail.com',
            'escuela'=> 'ingenieria-electronica',
            'password'=> bcrypt('Edwin.2electronica'),
        ])->assignRole('Responsable'); // 'Responsable' de la linea 21 de archivo 'RoleSeeder.php'

        // User::factory(2)->create(); // de la linea 21 'RoleSeeder.php'
    }
}
