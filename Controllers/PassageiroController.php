<?php 

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\PassageiroDAO;
use VendaPassagem\Models\Passageiro;

class PassageiroController extends Controller {
    function indexAction(){
        $dao = new PassageiroDAO();

        $dados['passageiros'] = $dao->buscarTodos();

        $this->result("Passageiro", "Index", $dados);
    }

    function detailsAction(){
        
    }

    function createAction($request){
        $dao = new PassageiroDAO();

        $CPF = isset($request->data['CPF']) ? $request->data['CPF']  : '';
        $RG = isset($request->data['RG']) ? $request->data['RG']  : '';
        $nome = isset($request->data['nome']) ? $request->data['nome']  : '';
        $dataNascimento = isset($request->data['dataNascimento']) ? $request->data['dataNascimento']  : '';

        $dao->inserir(new Passageiro(
            $CPF,
            $RG,
            $nome,
            $dataNascimento
        ));

        $this->redirect('passageiros');
    }

    function editAction($request){

        $dao = new PassageiroDAO();

        $CPF = isset($request->data['CPF']) ? $request->data['CPF']  : '';
        $RG = isset($request->data['RG']) ? $request->data['RG']  : '';
        $nome = isset($request->data['nome']) ? $request->data['nome']  : '';
        $dataNascimento = isset($request->data['dataNascimento']) ? $request->data['dataNascimento']  : '';
        $id = $request->params['id'];

        $passageiro = $dao->buscar($id);
        $passageiro->setCPF($CPF);
        $passageiro->setRG($RG);
        $passageiro->setNome($nome);
        $passageiro->setDataNascimento($dataNascimento);

        $dao->editar($passageiro);

        $this->redirect('passageiros');

    }

    function deleteAction($request){

        $dao = new PassageiroDAO();

        $dao->excluir($request->params['id']);

        $this->redirect('passageiros');

    }
}
        
?>