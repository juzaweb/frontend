<?php

namespace Tadcms\Frontend\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static set(string $theme)
 * */
class Theme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Tadcms\Frontend\ThemeContract::class;
    }
}
