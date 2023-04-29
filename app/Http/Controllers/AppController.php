<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    //

    public function __invoke(Request $request){

        $user = Auth::user();

        switch($user->tipoUsuario->tipo) {
            case 'super_admin':
                return view('adminview');
            case 'admin':
                return view('adminview');
            case 'cadastro':
                return view('cadastroview');
            case 'financeiro':
                return view('financeiroview');
            case 'corretor':
                return view('corretorview');
            default:
                return redirect()->intended()->withErros(['erro' => 'Tipo de Usuario não encontrado']);
        }
    }
    
}
