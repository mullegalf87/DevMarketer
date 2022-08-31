<?php
// app/Http/Middleware/Language.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationController
{
  public function handle($request, Closure $next)
  {
   if(\Session::has('locale'))
   {
     \App::setlocale(\Session::get('locale'));
   }
   return $next($request);
 }

}