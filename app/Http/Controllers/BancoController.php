<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\BancoService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BancoController extends Controller
{
    /**
     * Exibe uma listagem de bancos.
     * 
     */
    public function index(Request $request)
    {
        return view('bancos.index', ['mensagem' => $request['mem']]);
    }

    /**
     * Exibe a view para cadastrar um novo banco
     */
    public function create()
    {
        return view("bancos.create");
    }

    /**
     * Salva um novo banco no banco de dados
     * @param $request Contém os valores da requisição http
     */
    public function store(Request $request)
    {
        try {
            $validacao = $request->validate([
                'codigo' => 'required|unique:bancos', 'sigla' => 'required|unique:bancos', 'nome' => 'required|unique:bancos'
            ]);

            $bancoService = new BancoService();
            $bancoService->cadastrar($request->codigo, $request->sigla, $request->nome);
            return redirect()->back()->with(['mensagem' => 'Banco cadastrado com sucesso']);
        } catch (QueryException $e) {

            return redirect()->back()->withInput()->withErrors(['erro_cadastro' => 'Erro ao cadastrar.']);
        }
    }

    /**
     * Exibe um determinado recurso.
     * @param $id Identificador único do recurso.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Exibe a página de um formulário para editar o banco.
     * @param $id Identificador único do banco.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Atualiza um determinado banco.
     * @param $request Objeto que guarda as informações da requisição http.
     * @param $id Identificador único do banco.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove um determinado banco do banco de dados.
     * @param $id Identificador único do banco.
     */
    public function destroy(string $id)
    {
        //
    }
}
