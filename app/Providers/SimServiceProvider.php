<?php

namespace App\Providers;

use App\Services\Registry\SimCardRegistry;
use Illuminate\Support\ServiceProvider;
use App\Services\Sim\Sim1;
use App\Services\Sim\Sim2;

class SimServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(SimCardRegistry::class)->register('sim1', new Sim1());
        $this->app->make(SimCardRegistry::class)->register('sim2', new Sim2());

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SimCardRegistry::class);
        $this->app->bind('simRegistry', SimCardRegistry::class);
    }
}
