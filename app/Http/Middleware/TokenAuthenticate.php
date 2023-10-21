<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Config;

class TokenAuthenticate
{
   public function handle(Request $request, Closure $next)
   {
        $token_env = env('TOKEN'); // Recupere o token de .env

        $token = $request->header('Authorization');
        if (!$token)
            return response('Cabeçalho Authorization ausente', 401);

        if ($token !== 'Bearer ' . $token_env) {
            return response('Token inválido', 401);
        }

        return $next($request);
   }
}
