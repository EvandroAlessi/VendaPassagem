<?php

namespace VendaPassagem\Core;


class Controller {
    
    protected function result($folder, $file, $data = array()){
        extract($data);

        if ($_SESSION["logado"] == true) {
            ob_start();
            include('Views/Index.php');
        
            $conteudo = ob_get_clean();
            $conteudo = explode("@conteudo", $conteudo);
        
            echo $conteudo[0];
        
            include  "Views/".$folder."/".$file.".php";
        
            echo $conteudo[1];
        }
        else{
            include  "Views/".$folder."/".$file.".php";
        }
    }
    
    protected function redirect($to){
        header("Location: /venda-passagem/". $to);
        exit();
    }
}
