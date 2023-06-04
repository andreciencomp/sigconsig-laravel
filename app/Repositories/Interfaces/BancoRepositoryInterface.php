<?php
    namespace App\Repositories\Interfaces;

    interface BancoRepositoryInterface{

        public function getById($id);

        public function save(array $data);

        public function update($id, array $fillable);

        public function delete($id);

        public function getAll();
    }







?>