<?php

namespace Modules\Books\Providers;

use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'books');

        $this->app->register(RouteServiceProvider::class);
    }
}
