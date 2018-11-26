<?php

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
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'city' => 'Guarapuava',
            'state' => 'PR',
            'cep' => '8505420',
            'district' => 'Santa Cruz',
        ]);
    }
}
