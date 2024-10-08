<?php

namespace App\Adapters\Concrete;

use App\Adapters\Contracts\PingerAdapterInterface;
use App\DTO\Pinger\PingDTO;
use App\Services\Contracts\PingerServiceInterface;

class PingerCommandAdapter implements PingerAdapterInterface
{
    public function __construct(private readonly PingerServiceInterface $pingerService){}

    /**
     * @param string $pingData
     * @return int
     */
    public function ping(mixed $pingData): int
    {
        $pingerDTO = new PingDTO($pingData);
        return $this->pingerService->ping($pingerDTO);
    }
}
