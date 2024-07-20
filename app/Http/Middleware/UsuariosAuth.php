<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UsuariosAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $usuario = env('USUARIO_ROTA_USUARIOS');
        $senha = env('SENHA_ROTA_USUARIOS');

        if ($request->getUser() != $usuario || $request->getPassword() != $senha) {
            return response()->json(['error' => 'Credenciais inválidas'], 401);
        }

        return $next($request);
    }
}
