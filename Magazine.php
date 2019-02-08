<?php

namespace Magazine;


use Product\Product;

class Magazine extends Product
{
    public function calcDiscount($discountPercent): float
    {
        return $this->price * $discountPercent;
    }
}