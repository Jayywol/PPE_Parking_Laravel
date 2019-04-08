<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
      if (auth()->user()->Admin())
      {
          return $next($request);
      }
      flash('Vous n\'êtes pas autorisé(e) à consulter cette page.')->error()->important();
      return redirect()->route('home');
    }
}
