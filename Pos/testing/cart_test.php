<?php

function __autoload($class){
    require_once '../class.' . $class . ".php";
}

$book = new Book('PHP Object-Oriented Solutions', 300);
$cart = new ShoppingCart();
$cart->addItem($book);
$movie = new Dvd('Gladiator', '120 minutes');
$cart->addItem($movie);
