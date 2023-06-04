<?php
namespace App\Services;

use App\Repositories\Eloquent\BancoRepository;

/**
 * Classe responsável pelas regras de negócio relacionadas com os Bancos.
 */
class BancoService{

    /**
     * Salva um novo banco no banco de dados
     * @param $codigo Código do banco.
     * @param $sigla Sigla do banco.
     * @param $nome Nome do banco.
     */
    function cadastrar($codigo, $sigla, $nome){
        
        $bancoRep = new BancoRepository();
        $dados = ['codigo' => $codigo, 'sigla' => $sigla, 'nome' => $nome];
        return $bancoRep->save($dados);
    }


}