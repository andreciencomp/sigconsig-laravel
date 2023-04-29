<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enderecos',function($table){
            $table->id();
            $table->string('cep');
            $table->text('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->text('complemento')->nullable();
            $table->string('telefone');
            $table->foreignId('cidade_id')->constrained('cidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
