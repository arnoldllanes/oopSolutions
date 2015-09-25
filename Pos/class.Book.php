<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'class.Product.php';

class Book extends Product {
    protected $_pageCount;
    
    public function __construct($title, $pageCount){
        $this->_title = $title;
        $this->_pageCount = $pageCount;
        $this->_type = 'book';
    }
    
    public function getPageCount(){
        return $this->_pageCount;
    }
    
    public function display(){
        echo "<p>Book: $this->_title ($this->_pageCount pages)</p>";
    }
}
