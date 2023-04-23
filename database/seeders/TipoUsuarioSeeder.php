<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoUsuario::create([
            'tipo' => 'super_admin'
        ]);

        TipoUsuario::create([
            'tipo' => 'admin'
        ]);

        TipoUsuario::create([
            'tipo' => 'financeiro'
        ]);

        TipoUsuario::create([
            'tipo' => 'cadastro'
        ]);

        TipoUsuario::create([
            'tipo' => 'corretor'
        ]);


    }
}
