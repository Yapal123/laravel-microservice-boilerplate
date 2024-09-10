<?php

use App\Providers\GrpcServiceProvider;
use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\Worker;
use Illuminate\Contracts\Console\Kernel;

require __DIR__ . '/vendor/autoload.php';

/**
 * @var Illuminate\Foundation\Application $app
 */
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->singleton(Server::class);

$kernel = $app->make(Kernel::class);
$server = $app->make(Server::class);
$kernel->bootstrap();

$server->serve(Worker::create());
