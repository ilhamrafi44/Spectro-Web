<?php

namespace App\Providers;
use Yajra\DataTables\Html\Builder;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::useVite();
        Paginator::useBootstrapFive();
        
        config(['app.locale' => 'id']);
Carbon::setLocale('id');
date_default_timezone_set('Asia/Jakarta');

    }
}
