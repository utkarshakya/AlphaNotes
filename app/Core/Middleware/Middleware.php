<?php

namespace Core\Middleware;

class Middleware
{

    protected const MAP = [
        "guest" => Guest::class,
        "auth" => Auth::class
    ];

    public static function resolve($key)
    {
        $middleware = static::MAP[$key] ?? false;
        if ($middleware) {
            $middleware::handler();
        }
    }
}
