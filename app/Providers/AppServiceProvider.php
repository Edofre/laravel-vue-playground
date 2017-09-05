<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot()
    {
        // Add a blade formatter for a boolean attribute
        \Blade::directive('boolean', function ($expression) {
            return "<?= $expression ? trans('common.yes') : trans('common.no'); ?>";
        });

        // Add a blade formatter for a boolean attribute
        \Blade::directive('gender', function ($expression) {
            return "<?= $expression ? trans('common.male') : trans('common.female'); ?>";
        });

    }

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
