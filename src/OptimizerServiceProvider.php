<?php

namespace LaralLover\Optimizer;

use Faker\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use DB;

class OptimizerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    protected $commands = [
        'LaralLover\Optimizer\Console\PermissionsCommand',
    ];

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        return true;
    }

    /**
     * Register the service provider.
     */
    public function register()
    {}

    protected function registerCommands()
    {
        $this->commands($this->commands);

        $this->app->singleton('optimizer', function ($app) {
            return new Optimizer($app);
        });
    }

    private function isArtisanCommand()
    {
        $arguments = request()->server('argv');

        if( isset( $arguments[0], $arguments[1]) && $arguments[0] == 'artisan' )
        {
            return true;
        }

        $segment = request()->segment(3);

        if( isset( $segment ) && request()->segment(3) == 'vendor:discover' )
        {
            return true;
        }
    }
}
