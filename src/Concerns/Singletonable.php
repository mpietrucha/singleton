<?php

namespace Mpietrucha\Support\Concerns;

use Closure;
use Mpietrucha\Support\Singleton;

trait Singletonable
{
    public static function instance(): self
    {
        return self::singleton(self::singletonable(...))->get();
    }

    public static function singleton(?Closure $callback = null): Singleton
    {
        return Singleton::for(static::class, $callback);
    }

    protected static function singletonable(Singleton $singleton): void
    {
    }
}
