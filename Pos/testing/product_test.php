<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class){
    require_once '../class.' . $class . ".php";
}

$book = new Book('PHP Object-Oriented Solutions', 300);
$dvd = new Dvd('Gladiator', '120 minutes');

$book->display();
$dvd->display();

echo get_class($book);

echo get_parent_class($book);