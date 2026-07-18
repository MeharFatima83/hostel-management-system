<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check whether user is logged in
        if (!session()->has('user_id')) {
            return redirect('/login')
                ->withErrors([
                    'name' => 'Please login first.'
                ]);
        }

        // Check admin role
        if (session('role') !== 'admin') {
            abort(403, 'Unauthorized access. Admin only.');
        }

        return $next($request);
    }
}