<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable = [
        'nome',
        'dataNascimento',
        'cpf',
        

    ];
    public function endereco(){
        return $this->hasOne('App/Models/Endereco');
    }

    use HasFactory;
}
