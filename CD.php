<?php

namespace CD;


use Product\Product;

class CD extends Product
{

    public function calcDiscount($discountPercent): float
    {
        return $this->price * $discountPercent;
    }
}