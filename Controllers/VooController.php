<?php 
    
namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\VooDAO;
use VendaPassagem\DAO\AeronaveDAO;
use VendaPassagem\Models\Voo;

class VooController extends Controller {

    function indexAction(){
        $dao = new VooDAO();

        $dados['voos'] = $dao->buscarTodos();
        $dao = new AeronaveDAO();

        $dados['aeronaves'] = $dao->buscarTodos();

        $this->result("Voo", "Index", $dados);
    }

    function detailsAction(){
        
    }

    function createAction($request){
        $dao = new VooDAO();

        $dataPartida = isset($request->data['dataPartida']) ? $request->data['dataPartida']  : '';
        $valorPassagem = isset($request->data['valorPassagem']) ? $request->data['valorPassagem']  : '';
        $aeronaveID = isset($request->data['aeronaveID']) ? $request->data['aeronaveID']  : '';

        $dao->inserir(new Voo(
            $aeronaveID,
            $dataPartida,
            $valorPassagem
        ));

        $this->redirect('voos');
    }

    function editAction($request){

        $dao = new VooDAO();

        $dataPartida = isset($request->data['dataPartida']) ? $request->data['dataPartida']  : '';
        $valorPassagem = isset($request->data['valorPassagem']) ? $request->data['valorPassagem']  : '';
        $aeronaveID = isset($request->data['aeronaveID']) ? $request->data['aeronaveID']  : '';
        $id = $request->params['id'];

        $voo = $dao->buscar($id);
        $voo->setDataPartida($dataPartida);
        $voo->setValorPassagem($valorPassagem).
        $voo->setAeronaveID($aeronaveID);

        $dao->editar($voo);

        $this->redirect('voos');

    }

    function deleteAction($request){

        $dao = new VooDAO();

        $dao->excluir($request->params['id']);

        $this->redirect('voos');

    }
}

?>