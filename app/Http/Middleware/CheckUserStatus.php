<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status === 'disabled') {
            Auth::logout();

            return redirect()->route('login')->withErrors([
                'email' => trans('auth.your account is disabled')
            ]);
        }

        return $next($request);
    }
}
