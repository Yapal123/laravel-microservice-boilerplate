<?php

namespace App\Adapters\Concrete;

use App\DTO\Pinger\PingDTO;
use App\Services\Contracts\PingerServiceInterface;
use GRPC\Pinger\PingRequest;
use App\Adapters\Contracts\PingerAdapterInterface;

class PingerGrpcAdapter implements PingerAdapterInterface
{
    public function __construct(private readonly PingerServiceInterface $pingerService)
    {
    }

    /**
     * @param PingRequest $pingData
     * @return int
     */
    public function ping(mixed $pingData): int
    {
        $pingDto = new PingDTO($pingData->getUrl());
        return $this->pingerService->ping($pingDto);
    }
}
