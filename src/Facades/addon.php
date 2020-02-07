<?php

namespace backpack\addon\Facades;

use Illuminate\Support\Facades\Facade;

class addon extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'addon';
    }
}
