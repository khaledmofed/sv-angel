<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    protected array $supported = ['en', 'ja', 'ko', 'es', 'zh-TW', 'vi'];

    public function handle(Request $request, Closure $next)
    {
        $locale = session('locale', 'en');
        if (in_array($locale, $this->supported)) {
            App::setLocale($locale);
        }
        return $next($request);
    }
}
