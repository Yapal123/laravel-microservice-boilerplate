<?php

namespace App\Services\Concrete;

use App\DTO\Pinger\PingDTO;
use App\Services\Contracts\PingerServiceInterface;
class PingerService implements PingerServiceInterface
{

    public function ping(PingDTO $pingDTO): int
    {
        return 3030;
    }
}
