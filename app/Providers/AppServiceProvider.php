<?php

namespace App\Providers;

use Ezegyfa\LaravelHelperMethods\CopyNodeModules;
use Ezegyfa\LaravelHelperMethods\Language\Commands\CreateListToTranslate;
use Ezegyfa\LaravelHelperMethods\Language\Commands\CreateTranslateFile;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            CopyNodeModules::class,
            CreateTranslateFile::class,
            CreateListToTranslate::class,
        ]);
        $this->loadViewsFrom(base_path('vendor/ezegyfa/laravel-helper-methods/src'), 'ezegyfa');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
