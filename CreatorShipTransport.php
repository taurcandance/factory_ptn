<?php

namespace CreatorShipTransport;


use CreatorFactory\CreatorFactory;
use Ship\Ship;

class CreatorShipTransport extends CreatorFactory
{

    function createTransport()
    {
        return new Ship();
    }
}