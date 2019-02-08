<?php
require_once '../vendor/autoload.php';

use ShopManager\ShopManager;

$productManager = new ShopManager();
$cd = $productManager->getCD();
var_dump($cd);