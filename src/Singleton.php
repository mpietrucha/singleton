<?php

namespace Mpietrucha\Support;

use Closure;
use Illuminate\Support\Collection;

class Singleton extends Instance
{
    protected static ?Collection $instances = null;

    public static function for(string $singletonable, ?Closure $callback = null): self
    {
        self::$instances ??= collect();

        if ($singleton = self::$instances->get($singletonable)) {
            return $singleton;
        }

        value($callbck, $instance = self::create($singletonable));

        return self::$instances->put($singletonable, $instance);
    }
}
