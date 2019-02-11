<?php

require_once '../vendor/autoload.php';
require_once 'CD.php';
require_once 'Book.php';
require_once 'Magazine.php';


//$manufactures = array(
//    new Typography(),
//    new Printer(),
//    new MusicStudio()
//);
//
//$products = prepareGoods($manufactures);
//echo '<pre>';
//var_dump($products);
//echo '</pre>';
//
//
//
//
//function prepareGoods($manufactures)
//{
//    $result = array();
//
//    for ($i = 0; $i < 10; $i++) {
//        $manufacture = $manufactures[array_rand($manufactures)];
//        $product     = $manufacture->createProduct();
//        $result[]    = $product;
//    }
//
//    return $result;
//}


$typeOfProducts = array(
    function () {
        return new Magazine();
    },
    function () {
        return new Book();
    },
    function () {
        return new CD();
    },
    function () {
        return new Orange();
    },
);

$products = array();

for ($i = 0; $i < 10; $i++) {
    $typeOfProduct = $typeOfProducts[rand(0, count($typeOfProducts) - 1)];
    $products[]    = $typeOfProduct();
    $products[$i]->setName('number'."$i");
}

//echo '<pre>';
//var_dump($products);
//echo '</pre>';

class Courier
{

    public function deliveryProduct(ICreator $fromProductCreator)
    {
        return $fromProductCreator->createProduct();
    }
}

$cour            = new Courier();
$productFeedBack = $cour->deliveryProduct(new Printer());
var_dump($productFeedBack);