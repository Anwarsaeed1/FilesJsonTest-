<?php

namespace App\Providers;

use App\Interfaces\DataWinterface;
use App\Interfaces\DataXinterface;
use App\Interfaces\DataYinterface;
use App\Repositories\DataWRepository;
use App\Repositories\DataXRepository;
use App\Repositories\DataYRepository;
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
        $this->app->bind(DataYinterface::class, DataYRepository::class);
        $this->app->bind(DataXinterface::class, DataXRepository::class);
        $this->app->bind(DataWinterface::class, DataWRepository::class);


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
