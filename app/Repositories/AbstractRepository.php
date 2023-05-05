<?php

namespace App\Repositories;

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

        function save($fillableData){

           $this->model->create($fillableData);

        }


        function delete($id){
            $this->model->delete($id);
        }

        function getAll(){
            return $this->model->all();
        }

    }
