<?php


class Typography implements ICreator
{
    public function createProduct()
    {
        return new Magazine();
    }
}