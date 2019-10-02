<?php

namespace SavaniHD\ImageUploadLaravel;

use Illuminate\Support\ServiceProvider;
use SavaniHD\ImageUploadLaravel\App\ImageUploadHDLaravel;
use Illuminate\Support\Facades\App;

class ImageUploadLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        \Log::info('from package');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('imageUploadHDLaravel',function(){

            return new ImageUploadHDLaravel();

        });
    }
}
