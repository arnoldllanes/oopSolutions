<?php
/************************** 
 PHP SOLUTIONS PG 27 CHAPTER 2
 *************************/
require_once 'class.Manufacturer.php';

abstract class Product {
   protected $_type;
   protected $_title;
   protected $_manufacturer;
   
   public function __construct(){
       $this->_manufacturer = new Manufacturer();
   }
   
   public function __clone(){
       $this->_manufacturer = clone $this->_manufacturer;
   }
   
   public function getType(){
       return $this->_type;
   }
   
   public function setTitle($title){
      $this->_title = $title;
   }
   
   public function getTitle(){
       return $this->_title;
   }
   
  
   abstract public function display();
   
   public function setManufacturerName($name){
       $this->_manufacturer->setManufacturerName($name);
   }
   
   public function getManufacturerName(){
       return $this->_manufacturer->getManufacturerName();
   }
}


