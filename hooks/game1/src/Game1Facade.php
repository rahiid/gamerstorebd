<?php

namespace Game1;

use Illuminate\Support\Facades\Facade;

class Game1Facade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Game1::class;
    }
}
