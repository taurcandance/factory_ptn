<?php

interface IDiscount
{
    public function calcDiscount($discountPercent): float;
}