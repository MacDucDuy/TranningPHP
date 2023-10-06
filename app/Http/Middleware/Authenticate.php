<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
{
    if (!$request->expectsJson() && Str::contains($request->url(), '/admin')) {
    // dd('không qua được middlewware');

        return '/admin/login';
    }

}
}
