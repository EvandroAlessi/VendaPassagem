<?php

namespace Controllers;

use Core\Controller;

class AeronaveController extends Controller {
    
    function IndexAction(){
        $arenave = new Arenave();
        $dados["arenaves"] = $arenave->listClientes();
        $this->result("arenaves", "list", $dados);
    }
    
    
    
}

?>