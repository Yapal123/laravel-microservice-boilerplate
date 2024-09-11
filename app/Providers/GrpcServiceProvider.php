<?php

namespace App\Providers;

use App\Ports\Concrete\PingerPort;
use GRPC\Pinger\PingerInterface;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;
use ReflectionException;
use Spiral\RoadRunner\GRPC\Server;

class GrpcServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @throws BindingResolutionException
     * @throws ReflectionException
     */
    public function register(): void
    {
        $server = $this->app->make(Server::class);

        $server->registerService(PingerInterface::class, $this->app->make(PingerPort::class));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
