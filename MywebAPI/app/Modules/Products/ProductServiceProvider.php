<?php

namespace Myweb\Modules\Products;

use Illuminate\Support\ServiceProvider;
use Myweb\Contracts\Products\Products;
use Myweb\Modules\Products\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Products::class, function() {
            return new ProductService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__. './routes.php');
    }
}
