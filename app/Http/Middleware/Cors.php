<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
      return $next($request)
        ->header('Access-Control-Allow-Origin', 'http://iamrajnish.atspace.cc/create.html, http://iamrajnish.atspace.cc/update.html, http://iamrajnish.atspace.cc/view.html, http://iamrajnish.atspace.cc/delete.html, http://iamrajnish.atspace.cc')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization, accept');  
    }
}
