<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    public $timestamps = false;
   // @var array<int, string>
    protected $fillable = [
        "codigo",
        "sigla",
        "nome"
    ];
}
