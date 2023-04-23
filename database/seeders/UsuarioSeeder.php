<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo = TipoUsuario::all()->first();
        $usuario = new User();
        $usuario->name = "teste";
        $usuario->email = "teste@teste.com";
        $usuario->password = Hash::make('12345');
        $usuario->tipo_usuario_id = $tipo->id;
        $usuario->save();

    }
}
