<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'class.Product.php';

class Dvd extends Product{
    protected $_duration;
    
    public function __construct($title, $duration) {
        parent::__construct();
        $this->_type = 'DVD';
        $this->_duration = $duration;
        $this->_title = $title;        
    }
    
    public function getDuration(){
        return $this->_duration;
    }
    
    public function display(){
        echo "This DVD called $this->_title is my favorite movie and it is $this->_duration long.";
    }
    
}