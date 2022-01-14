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

            $menu->add('Home');
          
            $menu->add('About');
          
            $menu->about->add('Who are we?', 'who-we-are');
            $menu->about->add('What we do?', 'what-we-do');
          
            $menu->add('Blog', 'blog');
            $menu->add('Contact',  'contact');
          
          });

        return $next($request);
    }
}
