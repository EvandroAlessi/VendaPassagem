<?php 
    
namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\VooDAO;
use VendaPassagem\Models\Voo;

class VooController extends Controller {
    function indexAction(){
        $dao = new VooDAO();

        $dados['voos'] = $dao->buscarTodos();

        $this->result("Voo", "Index", $dados);
    }

    function detailsAction(){
        
    }

    function createAction($request){
        $dao = new VooDAO();

        $dados['voo'] = $dao->inserir($request->data);

        $this->result("Voo", "Edit", $dados);
    }

    function editAction(){

    }

    function deleteAction(){

    }
}

?>