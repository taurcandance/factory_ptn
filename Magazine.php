<?php
require_once 'Product.php';

class Magazine extends Product
{
    public function calcDiscount($discountPercent): float
    {
        return $this->price * $discountPercent;
    }
}