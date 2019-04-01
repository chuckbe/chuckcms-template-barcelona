<?php

namespace Chuckbe\ChuckcmsTemplateBarcelona;

use Chuckbe\ChuckcmsTemplateBarcelona\Commands\PublishBarcelona;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateBarcelonaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishBarcelona::class,
            ]);
        }
        //php artisan chuckcms-template-barcelona:publish
        //php artisan vendor:publish --tag=chuckcms-template-barcelona-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-barcelona'),
        ], 'chuckcms-template-barcelona-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-barcelona.php' => config_path('chuckcms-template-barcelona'),
        // ], 'chuckcms-template-barcelona-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-barcelona');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-barcelona.php', 'chuckcms-template-barcelona-config'
        // );
    }
}
