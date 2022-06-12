<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenus
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
        \Menu::make('MyNavBar', function($menu){

            $menu->add('Home')->link->attr(['class' => "nav-link active"]);
          
            $menu->add('About')->link->attr(['class' => "nav-link active"]);

            $menu->add('Blog', 'blog')->link->attr(['class' => "nav-link active"]);
            $menu->add('Contact',  'contact')->link->attr(['class' => "nav-link active"]);
          
          });

        return $next($request);
    }
}
