<?php

namespace IDiscount;


interface IDiscount
{
    public function calcDiscount($discountPercent): float;
}