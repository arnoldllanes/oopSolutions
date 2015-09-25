<?php

/************************** 
 PHP SOLUTIONS PG 27 CHAPTER 2
 *************************/
abstract class Product {
   protected $_type;
   protected $_title;
   
   public function getType(){
       return $this->_type;
   }
   
   public function getTitle(){
       return $this->_title;
   }
  
   abstract public function display();
}


