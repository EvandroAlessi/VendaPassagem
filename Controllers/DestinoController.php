<?php 

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\DestinoDAO;
use VendaPassagem\Models\Destino;

class DestinoController extends Controller {
    function indexAction(){
        $dao = new DestinoDAO();

        $dados['destinos'] = $dao->buscarTodos();

        $this->result("Destino", "Index", $dados);
    }

    function detailsAction(){
        
    }

    function createAction($request){
        $dao = new DestinoDAO();

        $taxaEmbarque = isset($request->data['taxaEmbarque']) ? $request->data['taxaEmbarque']  : '';
        $nomeAeroporto = isset($request->data['nomeAeroporto']) ? $request->data['nomeAeroporto']  : '';

        $dao->inserir(new Destino(
            $nomeAeroporto,
            $taxaEmbarque
        ));

        $this->redirect('destinos');
    }

    function editAction($request){

        $dao = new DestinoDAO();

        $taxaEmbarque = isset($request->data['taxaEmbarque']) ? $request->data['taxaEmbarque']  : '';
        $nomeAeroporto = isset($request->data['nomeAeroporto']) ? $request->data['nomeAeroporto']  : '';
        $id = $request->params['id'];

        $destino = $dao->buscar($id);
        $destino->setTaxaEmbarque($taxaEmbarque);
        $destino->setNomeAeroporto($nomeAeroporto);

        $dao->editar($destino);

        $this->redirect('destinos');

    }

    function deleteAction($request){

        $dao = new DestinoDAO();

        $dao->excluir($request->params['id']);

        $this->redirect('destinos');

    }
}
        
?>