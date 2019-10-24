<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

/**
 * Description of Router
 *
 * @author cayohenrique
 */
class Router {
    private $uri;
    private $controller;
    private $action;
    
    public function __construct() {
        $uri = $_SERVER["REQUEST_URI"];
        $base = "/venda-passagem";
        $route = str_replace($base,"",$uri);
        $this->uri = $route;
        $this->redirectController();
        $this->loadController();
    }
    
    protected function redirectController(){
        if ($_SESSION["logado"] != 'true'){
            $this->controller = "Login";
            $this->action = "Index";
        }
        else{
            switch ($this->uri){
                case "/":
                    $this->controller = "Home";
                    $this->action = "Index";
                break;
                case "/aeronaves":
                    $this->controller = "Clientes";
                    $this->action = "Index";
                break;
                case "/aeronaves/create":
                    $this->controller = "Clientes";
                    $this->action = "Create";
                break;
                case "/aeronaves/edit":
                    $this->controller = "Clientes";
                    $this->action = "Edit";
                break;
                case "/aeronaves/delete":
                    $this->controller = "Clientes";
                    $this->action = "Delete";
                break;
                case "/destinos":
                    $this->controller = "Clientes";
                    $this->action = "Index";
                break;
                case "/destinos/create":
                    $this->controller = "Clientes";
                    $this->action = "Create";
                break;
                case "/destinos/edit":
                    $this->controller = "Clientes";
                    $this->action = "Edit";
                break;
                case "/destinos/delete":
                    $this->controller = "Clientes";
                    $this->action = "Delete";
                break;
                case "/passageiros":
                    $this->controller = "Clientes";
                    $this->action = "Index";
                break;
                case "/passageiros/create":
                    $this->controller = "Clientes";
                    $this->action = "Create";
                break;
                case "/passageiros/edit":
                    $this->controller = "Clientes";
                    $this->action = "Edit";
                break;
                case "/passageiros/delete":
                    $this->controller = "Clientes";
                    $this->action = "Delete";
                break;
                case "/voos":
                    $this->controller = "Clientes";
                    $this->action = "Index";
                break;
                case "/voos/create":
                    $this->controller = "Clientes";
                    $this->action = "Create";
                break;
                case "/voos/edit":
                    $this->controller = "Clientes";
                    $this->action = "Edit";
                break;
                case "/voos/delete":
                    $this->controller = "Clientes";
                    $this->action = "Delete";
                break;
                default:
                    $this->controller = "Index";
                    $this->action = "Error";
            }
        }
    }
    
    protected function loadController(){
        $cont = "Controllers\\".$this->controller."Controller";
        $controller = new $cont();
        $action = $this->action."Action";
        $controller->$action();
        
    }
}
