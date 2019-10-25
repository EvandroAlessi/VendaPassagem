<?php

namespace VendaPassagem\Core;

class Router {
    
    private $uri;
    private $controller;
    private $action;
    private $params;
    private $method;

    public function __construct() {
        $uri = $_SERVER["REQUEST_URI"];
        $base = "/venda-passagem/";
        $route = str_replace($base,"",$uri);
        $this->uri = $route;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->redirectController();
        $this->loadController();
    }
    
    protected function redirectController(){

        $params = explode('/', $this->uri);
        $this->params = array();
        if (count($params) == 1) 
            $params[1] = "";
        //var_dump($params[1]);die();
        //  var_dump((!isset($_SESSION["logado"]) || $_SESSION["logado"] != true || $params[0] == 'login') && $params[0] != 'register' && $params[0] != 'forgot-password');die();

        if ((!isset($_SESSION["logado"]) || $_SESSION["logado"] != true || $params[0] == 'login') && $params[0] != 'register' && $params[0] != 'forgot-password'){
            $this->controller = "Account";
            $this->action = "login";
        }
        else{
            switch ($params[0]){

                case "":
                    $this->controller = "Home";
                    $this->action = "index";
                    break;
                case "register":
                    $this->controller = "Account";
                    $this->action = $this->method == "POST" ? "save" : "register";
                    break;
                case "forgot-password":
                    $this->controller = "Account";
                    $this->action = "forgotPassword";
                    break;
                case 'aeronaves':
                    switch($params[1]){

                        case "":
                            $this->controller = "Aeronave";
                            $this->action = "Index";
                            break;
                        case "details":
                            $this->controller = "Aeronave";
                            $this->action = "details";
                            $this->params['id'] = $params[2];
                            break;
                        case "create":
                            $this->controller = "Aeronave";
                            $this->action = "Create";
                            break;
                        case "edit":
                            $this->controller = "Aeronave";
                            $this->action = "Edit";
                            $this->params['id'] = $params[2];
                            break;
                        case "delete":
                            $this->controller = "Aeronave";
                            $this->action = "Delete";
                            $this->params['id'] = $params[2];
                            break;
                    }
                    break;
                case 'destinos':
                    switch($params[1]){

                        case "":
                            $this->controller = "Destino";
                            $this->action = "Index";
                            break;
                        case "details":
                            $this->controller = "Destino";
                            $this->action = "details";
                            $this->params['id'] = $params[2];
                            break;
                        case "create":
                            $this->controller = "Destino";
                            $this->action = "Create";
                            break;
                        case "edit":
                            $this->controller = "Destino";
                            $this->action = "Edit";
                            $this->params['id'] = $params[2];
                            break;
                        case "delete":
                            $this->controller = "Destino";
                            $this->action = "Delete";
                            $this->params['id'] = $params[2];
                            break;
                    }
                    break;
                case "passageiros":
                    switch($params[1]){

                        case "":
                            $this->controller = "Passageiro";
                            $this->action = "Index";
                        case "details":
                            $this->controller = "Passageiro";
                            $this->action = "details";
                            $this->params['id'] = $params[2];
                            break;
                        case "create":
                            $this->controller = "Passageiro";
                            $this->action = "Create";
                        break;
                        case "edit":
                            $this->controller = "Passageiro";
                            $this->action = "Edit";
                            $this->params['id'] = $params[2];
                        break;
                        case "delete":
                            $this->controller = "Passageiro";
                            $this->action = "Delete";
                            $this->params['id'] = $params[2];
                        break;
                    }
                    break;
                case "voos":
                    switch($params[1]){

                        case "":
                            $this->controller = "Voo";
                            $this->action = "Index";
                            break;
                        case "details":
                            $this->controller = "Voo";
                            $this->action = "details";
                            $this->params['id'] = $params[2];
                            break;
                        case "create":
                            $this->controller = "Voo";
                            $this->action = "Create";
                        break;
                        case "edit":
                            $this->controller = "Voo";
                            $this->action = "Edit";
                            $this->params['id'] = $params[2];
                        break;
                        case "delete":
                            $this->controller = "Voo";
                            $this->action = "Delete";
                            $this->params['id'] = $params[2];
                        break;
                    }
                    break;
                case "/voos":
                default:
                    $this->controller = "Index";
                    $this->action = "Error";
            }
        }
    }
    
    protected function loadController(){
        //var_dump($this->controller);
        //var_dump($this->action);

        $cont = "\\VendaPassagem\\Controllers\\" . $this->controller . "Controller";
        $controller = new $cont();

        $action = $this->action."Action";

        $dados = new \StdClass();

        $dados->data = $_POST;
        $dados->filter = $_GET;
        $dados->params = $this->params;

        $controller->$action($dados);
        
    }
}
