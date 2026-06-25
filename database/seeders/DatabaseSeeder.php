<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuário admin padrão
        DB::table('users')->insertOrIgnore([
            'name'       => 'Administrador',
            'email'      => 'admin@sistema.com',
            'password'   => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
