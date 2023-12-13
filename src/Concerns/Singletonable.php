<?php

namespace Mpietrucha\Support\Concerns;

use Mpietrucha\Support\Singleton;

trait Singletonable
{
    public static function instance(): self
    {
        return Singleton::for(static::class, self::singletonable(...))->get();
    }

    protected function singletonable(Singleton $singleton): void
    {
    }
}
