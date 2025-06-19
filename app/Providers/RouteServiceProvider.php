<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Tambahkan ini agar routes/api.php terbaca
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // Ini untuk web.php
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
