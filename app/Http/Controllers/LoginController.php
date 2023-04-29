<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


   public function index(Request $request){
       return view('login'); 
   }
    
   public function login(Request $request){

        $credencial = $request->only("name", "password");


        if(Auth::attempt($credencial)){

            $user = Auth::user();
            return redirect()->to('/app');

        }
        else{
                return redirect()->back()->withErrors(['login'=>'Falha de Login'])->withInput();
        }

   }


   public function logout(Request $request){
    
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
   }
}
