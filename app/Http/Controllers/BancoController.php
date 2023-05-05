<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\BancoRepository;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

    
    

    public function index(Request $request)
    {
        return view('bancos.index', ['mensagem' => $request['mem']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("bancos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rep = new BancoRepository();
        try{
            $rep->save($request->all());
            return redirect()->route('bancos.index',['mensagem' => 'Cadastrado com Sucesso']);
        }
        catch(QueryException $e){


            return redirect()->back()->withErrors(['erro' => 'O codigo tem que ser único. Preencha todos os Campos']);
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
