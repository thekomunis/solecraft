<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        if (class_exists(\Illuminate\Foundation\Console\ServeCommand::class)) {
            \Illuminate\Foundation\Console\ServeCommand::$passthroughVariables = array_unique(array_merge(
                \Illuminate\Foundation\Console\ServeCommand::$passthroughVariables,
                [
                    'SystemDrive',
                    'SystemRoot',
                    'windir',
                    'COMSPEC',
                    'PATHEXT',
                    'TEMP',
                    'TMP',
                    'USERPROFILE',
                    'LOCALAPPDATA',
                    'APPDATA',
                    'HOMEDRIVE',
                    'HOMEPATH',
                ]
            ));
        }
    }
}
