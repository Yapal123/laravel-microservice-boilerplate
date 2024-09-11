<?php

namespace App\Providers;

use App\Adapters\Concrete\PingerCommandAdapter;
use App\Adapters\Concrete\PingerGrpcAdapter;
use App\Adapters\Contracts\PingerAdapterInterface;
use App\Ports\Concrete\PingerCommand;
use App\Ports\Concrete\PingerPort;
use App\Services\Concrete\PingerService;
use App\Services\Contracts\PingerServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            PingerAdapterInterface::class, PingerGrpcAdapter::class
        );
        $this->app->bind(
            PingerServiceInterface::class, PingerService::class
        );
        $this->commands(PingerCommand::class);
        $this->app->bind(PingerAdapterInterface::class, PingerCommandAdapter::class);
        $this->app->when(PingerPort::class)
            ->needs(PingerAdapterInterface::class)
            ->give(function () {
                return $this->app->make(PingerGrpcAdapter::class);
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
