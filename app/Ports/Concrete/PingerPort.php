<?php

namespace App\Ports\Concrete;

use GRPC\Pinger\PingerInterface;
use GRPC\Pinger\PingRequest;
use GRPC\Pinger\PingResponse;
use Spiral\RoadRunner\GRPC;

class PingerPort implements PingerInterface
{

    /**
     * @inheritDoc
     */
    public function ping(GRPC\ContextInterface $ctx, PingRequest $in): PingResponse
    {
        return (new PingResponse())->setStatusCode(303);
    }
}
