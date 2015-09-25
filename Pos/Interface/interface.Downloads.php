<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface Downloads {
    public function getFileLocation();
    public function createDownloadLink();
}
