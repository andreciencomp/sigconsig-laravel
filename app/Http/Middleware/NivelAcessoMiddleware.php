<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class NivelAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $tipoUsuario): Response
    {
        if(Auth::check()){
            $tipo = Auth::user()->tipoUsuario->tipo;
            $tipos_array = explode("-",$tipoUsuario);
            if(in_array($tipo,$tipos_array)){
                return $next($request);
            }
            else{
                return redirect()->to('/')->withErrors(['acesso_negado' => "Nivel de acesso não permitido"]);
            }
        }
        return redirect()->to('/login')->withErrors(['login'=>'Nivel de acesso não permitido. Faça login para continuar']);
    }
}
