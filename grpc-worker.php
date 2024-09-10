<?php

use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\Worker;

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$server = new Server();

$server->registerService(\GRPC\Pinger\PingerInterface::class, new \App\Ports\Concrete\PingerPort());

$server->serve(Worker::create());
