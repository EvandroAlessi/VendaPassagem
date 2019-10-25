<?php 

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\PassageiroDAO;
use VendaPassagem\Models\Passageiro;

class PassageiroController extends Controller {
    function indexAction(){
        $dao = new PassageiroDAO();

        $dados['passageiros'] = $dao->buscarTodos();

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