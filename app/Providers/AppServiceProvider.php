<?php

namespace App\Providers;

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
        //
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

    protected $listen = [
        //...
        \UniSharp\LaravelFilemanager\Events\ImageWasUploaded::class => [
            \App\Listeners\ResizeUploadedImage::class,
        ],
     ];
}
