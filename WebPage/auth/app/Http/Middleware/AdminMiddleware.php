<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->role === 'admin') {
            return $next($request);
        }elseif ($user->role === '' || $user->role === 'user') {
            return redirect()->intended('/home');
        }

        return redirect('/')->withErrors(['Você não tem acesso suficiente.']);
    }
}
