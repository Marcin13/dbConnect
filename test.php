<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './UniversalConnect.php';

class ConnectClient{
    /**
     *
     * @var $hookup instance to DB.
     */
    private $hookup;
    public function __construct(){
        $this->hookup = UniversalConnect::doConnect();
    }
} 
$work = new ConnectClient();