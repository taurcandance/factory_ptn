<?php
require_once 'Product.php';

class CD extends Product
{

    public function calcDiscount($discountPercent): float
    {
        return $this->price * $discountPercent;
    }
}