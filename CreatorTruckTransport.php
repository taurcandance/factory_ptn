<?php

namespace CreatorTruckTransport;


use CreatorFactory\CreatorFactory;
use Truck\Truck;

class CreatorTruckTransport extends CreatorFactory
{
    function createTransport()
    {
        return new Truck();
    }
}