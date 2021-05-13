<?php

namespace Tadcms\Frontend\Providers;

use Illuminate\Support\ServiceProvider;
use Tadcms\Frontend\ThemeContract;
use Tadcms\Frontend\Theme;

/**
 * Class Tadcms\Frontend\Providers\ThemeServiceProvider
 *
 * @package    Tadcms\Tadcms
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://github.com/tadcms/tadcms
 * @license    MIT
 */
class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*if (!File::exists(public_path('Themes')) && !File::exists(config('theme.symlink_path')) && config('theme.symlink') && File::exists(config('theme.theme_path'))) {
            App::make('files')->link(config('theme.theme_path'), config('theme.symlink_path', public_path('Themes')));
        }*/
        $this->loadViewsFrom(__DIR__ . '/../../views', 'frontend');

        $this->publishes([
            __DIR__.'/../../config/frontend.php' => config_path('frontend.php'),
        ], 'tadcms_frontend_config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/frontend.php',
            'frontend'
        );

        $this->registerTheme();
    
        $this->commands([
            \Tadcms\Frontend\Commands\ThemeGeneratorCommand::class,
            \Tadcms\Frontend\Commands\PublishAssetCommand::class
        ]);
        
        //$this->loadViewsFrom(__DIR__.'/../Views', 'theme');
    }
    
    /**
     * Register theme required components .
     *
     * @return void
     */
    public function registerTheme()
    {
        $this->app->singleton(ThemeContract::class, function ($app) {
            return new Theme($app, $this->app['view']->getFinder(), $this->app['config'], $this->app['translator']);
        });
    }
}
