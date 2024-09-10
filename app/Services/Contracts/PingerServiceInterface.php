<?php

namespace App\Services\Contracts;

use App\DTO\Pinger\PingDTO;

interface PingerServiceInterface
{
    public function ping(PingDTO $pingDTO): int;
}
