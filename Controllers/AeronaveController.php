<?php

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\AeronaveDAO;
use VendaPassagem\Models\Aeronave;

class AeronaveController extends Controller {
    function indexAction(){
        $dao = new AeronaveDAO();

        $dados['aeronaves'] = $dao->buscarTodos();

        $this->result("Voo", "Index", $dados);
    }

    function detailsAction(){
        
    }

    function createAction(){

    }

    function editAction(){

    }

    function deleteAction(){

    }
} 

?>