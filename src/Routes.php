<?php

namespace Tadcms\Frontend;

use Illuminate\Support\Facades\Route;

class Routes
{
    protected static $namespace = '\\Tadcms\\Frontend\\Controllers';
    
    public static function web()
    {
        Route::group(['namespace' => self::$namespace], function () {
            require (__DIR__ . '/../routes/web.php');
        });
    }
}