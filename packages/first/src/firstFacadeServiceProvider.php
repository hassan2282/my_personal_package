<?php

namespace Seyyed\First;

use Illuminate\Support\ServiceProvider;

class firstFacadeServiceProvider extends ServiceProvider
{
    protected static function getFacadeAccessor()
    {
        return 'first';
    }
}
