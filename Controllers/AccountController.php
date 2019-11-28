<?php 

namespace VendaPassagem\Controllers;

use VendaPassagem\Core\Controller;
use VendaPassagem\DAO\UsuarioDAO;
use VendaPassagem\Models\Usuario;

class AccountController extends Controller {
    
    function loginAction($request)
    {
        $dao = new UsuarioDAO();

        $username = isset($request->data['username']) ? $request->data['username']  : '';
        $password = isset($request->data['password']) ? $request->data['password'] : '';

        $nome = $dao->buscar($username, $password);
        
        if ($nome)
        {
            $_SESSION["logado"] = true;

            $_SESSION["nome"] = $nome;

            $this->redirect("");
        }
        else
        {
            $_SESSION["logado"] = false;
            $_SESSION["nome"] = "";
            $this->result("Account", "Login");
        }
    }

    function logoutAction($request)
    {
        $_SESSION["logado"] = false;
        $this->result("Account", "Login");
    }

    function saveAction($request){
        $dao = new UsuarioDAO();

        $name = isset($request->data['name']) ? $request->data['name']  : '';
        $username = isset($request->data['username']) ? $request->data['username']  : '';
        $password = isset($request->data['password']) ? $request->data['password'] : '';

        $dao->inserir(new Usuario(
            $name,
            $username,
            $password 
        ));

        $_SESSION["logado"] = true;

        $this->redirect("");
    }

    function registerAction($request){
        $this->result("Account", "register");
    }

    function forgotPasswordAction($request){
        $this->result("Account", "forgotPassword");
    }
}
    
?>