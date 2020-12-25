<?php

namespace MasterDmx\LaravelUrls;

use Illuminate\Support\ServiceProvider;

class UrlsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $url = $this->app->make(UrlsManager::class);

        if (file_exists(base_path('routes/urls.php'))) {
            include base_path('routes/urls.php');
        }

        include 'func.php';
    }

    public function register()
    {
        $this->app->singleton(UrlsManager::class, function ($app) {
            return new UrlsManager();
        });
    }
}
