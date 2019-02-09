<?php
require_once 'Product.php';

class Book extends Product
{
    public function calcDiscount($discountPercent): float
    {
        return $this->price * $discountPercent;
    }

}