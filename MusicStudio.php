<?php

class MusicStudio implements ICreator
{

    public function createProduct()
    {
        return new CD();
    }
}