<?php

namespace Book;


use Product\Product;

class Book extends Product
{
    public function calcDiscount($discountPercent): float
    {
        return $this->price * $discountPercent;
    }

}