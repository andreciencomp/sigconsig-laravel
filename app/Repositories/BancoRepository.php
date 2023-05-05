<?php

namespace App\Repositories;

use App\Models\Banco;
use App\Repositories\Interfaces\BancoRepositoryInterface;

    class BancoRepository extends AbstractRepository implements BancoRepositoryInterface{

        protected $model = Banco::class;


    }

    

?>