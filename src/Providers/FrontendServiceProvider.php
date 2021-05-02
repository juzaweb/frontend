<?php

namespace Tadcms\Frontend\Providers;

use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    public function boot()
    {
    
    }

    public function register()
    {
        $this->app->register(ThemeServiceProvider::class);
    }
}
