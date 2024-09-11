<?php

namespace App\Adapters\Contracts;

use App\DTO\Pinger\PingDTO;
use GRPC\Pinger\PingRequest;

interface PingerAdapterInterface
{
    public function ping(PingRequest $pingData): int;
}
