<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class RegistrarRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info('Request entrante', [
            'metodo' => $request->method(),
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
        ]);

        $antes = microtime(true);

        $response = $next($request);

        $despues = microtime(true);
        $microsegundos = $despues - $antes;

        Log::info('Respuesta enviada', [
            'status' => $response->getStatusCode(),
            'microsegundos' => $microsegundos
        ]);
        return $response;
    }
}
