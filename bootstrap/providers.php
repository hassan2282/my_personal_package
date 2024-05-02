<?php

use Seyyed\First\firstFacadeServiceProvider;
use Seyyed\First\firstServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    firstServiceProvider::class,
    firstFacadeServiceProvider::class,
];
