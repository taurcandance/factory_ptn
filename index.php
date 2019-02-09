<?php


require_once '../vendor/autoload.php';
require_once 'CD.php';
require_once 'Book.php';
require_once 'Magazine.php';


$cd       = Product::init('CD');
$book     = Product::init('Book');
$magazine = Product::init('Magazine');

var_dump($cd);
echo '<br/>';
var_dump($book);
echo '<br/>';
var_dump($magazine);
