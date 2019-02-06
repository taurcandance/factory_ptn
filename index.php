<?php

use CreatorShipTransport\CreatorShipTransport;
use CreatorTruckTransport\CreatorTruckTransport;

$shipsFactory = new CreatorShipTransport();
$bloodMarry = $shipsFactory->CreateTransport();
$bloodMarry->download();
$bloodMarry->deliver();
$bloodMarry->unload();


$truckFactory = new CreatorTruckTransport();
$volvo = $truckFactory->CreateTransport();
$volvo->download();
$volvo->deliver();
$volvo->unload();
