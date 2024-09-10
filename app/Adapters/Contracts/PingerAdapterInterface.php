<?php

namespace App\Adapters\Contracts;

use App\DTO\Pinger\PingDTO;

interface PingerAdapterInterface
{
    public function ping(mixed $pingData): int;
}
