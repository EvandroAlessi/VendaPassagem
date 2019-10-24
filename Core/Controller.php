<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;
/**
 * Description of Controller
 *
 * @author cayohenrique
 */
class Controller {
    
    protected function result($controller, $file, $data = array()){
        extract($data);
        include  "Views".DS.$controller.DS.$file.".php";
   }
    
}
