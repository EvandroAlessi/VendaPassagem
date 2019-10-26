<?php 
    
namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\AeronaveDAO;
use VendaPassagem\DAO\DestinoDAO;
use VendaPassagem\Models\Aeronave;

class AeronaveController extends Controller {

    function indexAction(){
        $dao = new AeronaveDAO();
        $dados['aeronaves'] = $dao->buscarTodos();
        
        $dao = new DestinoDAO();
        $dados['destinos'] = $dao->buscarTodos();

        $this->result("Aeronave", "Index", $dados);
    }

    function detailsAction(){
        
    }

    function createAction($request){
        $dao = new AeronaveDAO();

        $destinoID = isset($request->data['destinoID']) ? $request->data['destinoID']  : '';
        $modelo = isset($request->data['modelo']) ? $request->data['modelo']  : '';
        $qntAssentos = isset($request->data['qntAssentos']) ? $request->data['qntAssentos']  : '';
        $qntAssentosEspecial = isset($request->data['qntAssentosEspecial']) ? $request->data['qntAssentosEspecial']  : '';

        $dao->inserir(new Aeronave(
            $destinoID,
            $modelo,
            $qntAssentos,
            $qntAssentosEspecial
        ));


        $this->redirect('aeronaves');
    }

    function editAction($request){

        $dao = new AeronaveDAO();

        $destinoID = isset($request->data['destinoID']) ? $request->data['destinoID']  : '';
        $modelo = isset($request->data['modelo']) ? $request->data['modelo']  : '';
        $qntAssentos = isset($request->data['qntAssentos']) ? $request->data['qntAssentos']  : '';
        $qntAssentosEspecial = isset($request->data['qntAssentosEspecial']) ? $request->data['qntAssentosEspecial']  : '';
        $id = $request->params['id'];

        $aeronave = $dao->buscar($id);
        $aeronave->setDestinoID($destinoID);
        $aeronave->setModelo($modelo);
        $aeronave->setQntAssentos($qntAssentos);
        $aeronave->setQntAssentosEspecial($qntAssentosEspecial);

        $dao->editar($aeronave);

        

        $this->redirect('aeronaves');

    }

    function deleteAction($request){

        $dao = new AeronaveDAO();

        $dao->excluir($request->params['id']);

        $this->redirect('aeronaves');

    }
}

?>