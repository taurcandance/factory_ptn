<?php


class Printer implements ICreator
{
    public function createProduct()
    {
        return new Book();
    }

}