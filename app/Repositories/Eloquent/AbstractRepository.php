<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\ErroBDException;
use Illuminate\Database\QueryException;

    abstract class AbstractRepository{

        protected $model;

        public function __construct()
        {
            $this->model = $this->resolveModel();
        }

        protected function resolveModel(){
            return app($this->model); 
        }


        function getById($id){

            return $this->model->find($id);
        }

        function save(array $dados){

           $this->model->create($dados);

        }

        function update($id, array $dados){
            $model = $this->model->find($id);
            $model->update($dados); 

        }


        function delete($id){
            $this->model->delete($id);
        }

        function getAll(){
            return $this->model->all();
        }

    }
