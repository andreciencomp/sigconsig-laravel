<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'rua',
        'numero',
        'bairro',
        'complemento',
        'telefone'
    ];

    public function cidade(){
        $this->belongsTo(Cidade::class);
    }



}


