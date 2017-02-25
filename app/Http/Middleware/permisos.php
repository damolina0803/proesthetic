<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class permisos
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @param  string|null  $guard
  * @return mixed
  */


  public function handle($request, Closure $next, $guard = null)
  {

    $url = substr($request->url(), 21, strlen($request->url()));
    $bandera = false;
    foreach (session('permisos') as $value) {
      if ($value['url'] == $url ) {
        $bandera = true;
      }
    }

    if ($bandera) {
      return $next($request);

    }else{
      return redirect('/home');
    }
  }
}
