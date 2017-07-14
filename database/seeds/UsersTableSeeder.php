<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'name' => 'Administrador Sica',
                'email' => 'admin@sica.cl',
                'password' => Hash::make('admin123'),
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'api_token' => null,
                'role_id' => 1,
            ],
            [
                'name' => 'Usuario Director',
                'email' => 'director@sica.cl',
                'password' => Hash::make('director123'),
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'api_token' => null,
                'role_id' => 2,
            ],
            [
                'name' => 'Usuario Profesor',
                'email' => 'profe@sica.cl',
                'password' => Hash::make('profe123'),
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'api_token' => null,
                'role_id' => 3,
            ]
        ]);
    }
}
