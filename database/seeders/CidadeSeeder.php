<?php

namespace Database\Seeders;

use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado = Estado::where('sigla','RN')->first();

        $cidade = new Cidade();
        $cidade->nome = "Natal";
        $cidade->estado_id = $estado->id;
        $cidade->save();

        $cidade = new Cidade();
        $cidade->nome = "Parnamirim";
        $cidade->estado_id = $estado->id;
        $cidade->save();

        $cidade = new Cidade();
        $cidade->nome = "Mossoro";
        $cidade->estado_id = $estado->id;
        $cidade->save();
        

        //---- Cidade de CE -----

        $estadoCE = Estado::where('sigla','CE')->first();
        $cidade = new Cidade();
        $cidade->nome = "Fortaleza";
        $cidade->estado_id = $estadoCE->id;
        $cidade->save();

        $estadoCE = Estado::where('sigla','CE')->first();
        $cidade = new Cidade();
        $cidade->nome = "Caucaia";
        $cidade->estado_id = $estadoCE->id;
        $cidade->save();

        $estadoCE = Estado::where('sigla','CE')->first();
        $cidade = new Cidade();
        $cidade->nome = "Sobral";
        $cidade->estado_id = $estadoCE->id;
        $cidade->save();




    }
}
