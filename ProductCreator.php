<?php

namespace ProductCreator;


use Book\Book;
use CD\CD;
use Magazine\Magazine;
use Product\Product;

abstract class ProductCreator
{

    public function getCD(): Product
    {
        return new CD();
    }

    public  function getBook(): Product
    {
        return new Book();
    }

    public function getMagazine(): Product
    {
        return new Magazine();
    }

}