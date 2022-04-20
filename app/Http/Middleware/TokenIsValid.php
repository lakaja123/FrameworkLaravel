<?php

namespace App\Http\Middleware;

use http\Env\Request;

class TokenIsValid
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response/\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response\Illuminate\Http\RedirectResponse
    */
    public function handle(Request $request, Closure $next) {
        if($request->query('token') == 'qaz-asd-edc')
            return $next($request);
        return response('Нет доступа', 401);

    }
}
