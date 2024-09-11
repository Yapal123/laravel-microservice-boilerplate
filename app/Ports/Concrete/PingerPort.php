<?php

namespace App\Ports\Concrete;

use App\Adapters\Contracts\PingerAdapterInterface;
use GRPC\Pinger\PingerInterface;
use GRPC\Pinger\PingRequest;
use GRPC\Pinger\PingResponse;
use Spiral\RoadRunner\GRPC;

class PingerPort implements PingerInterface
{
    public function __construct(private readonly PingerAdapterInterface $pingerAdapter)
    {
    }

    /**
     * @inheritDoc
     */
    public function ping(GRPC\ContextInterface $ctx, PingRequest $in): PingResponse
    {
        return (new PingResponse())->setStatusCode($this->pingerAdapter->ping($in));
    }
}
