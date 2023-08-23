<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $allowedRoles=['admin','user'];
        if(!in_array($role,$allowedRoles)){
            return response()->view('errors.403',[],403);
        }
        if(!$request->user()){
            return redirect()->route('home');
        }
        $userRole=$request->user()->role;
        if($userRole!==$role){
            switch($userRole){
                case 'admin':
                    return redirect()->route('admin.dashboard');
                    break;
                default:
                    return redirect()->route('home');
                    break;
            }
        }
        return $next($request);
    }
}
