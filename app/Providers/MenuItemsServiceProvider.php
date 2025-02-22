<?php

namespace App\Providers;

use App\Services\Templates\MenuItemsService;
use Illuminate\Support\ServiceProvider;

class MenuItemsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        MenuItemsService::setItems(config('templates.menu'));
    }
}
