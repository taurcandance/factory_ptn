<?php
require_once 'IDiscount.php';

abstract class Product implements IDiscount
{
    protected $type;
    protected $price;
    protected $name;
    protected $receiptDate;

    public static function init($product)
    {
        return new $product();
    }

    /**
     * Get Type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;

    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * Get Price.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;

    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * Get Name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;

    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}