<?php

namespace Enrico\Vulnarable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Enrico\Vulnarable\Vulnarable
 */
class Vulnarable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-vulnerable';
    }
}
