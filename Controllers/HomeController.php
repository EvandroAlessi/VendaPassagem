<?php

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;

class HomeController extends Controller {
    
    function indexAction(){
        $this->result("Home", "index");
    }
}

?>