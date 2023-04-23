<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado::create([
            'nome' => 'Rio Grande do Norte',
            'sigla' => 'RN'
        ]);

        Estado::create([
            'nome' => 'Ceara',
            'sigla' => 'CE'
        ]);


       


    }
}
