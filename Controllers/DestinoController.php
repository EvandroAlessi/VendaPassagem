<?php 

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\DestinoDAO;
use VendaPassagem\Models\Destino;

class DestinoController extends Controller {
    function indexAction(){
        $dao = new DestinoDAO();

        $dados['destinos'] = $dao->buscarTodos();

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