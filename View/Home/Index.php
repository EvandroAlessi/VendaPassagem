<?php 
    require('../../DAO/AeronaveDAO.php');

    spl_autoload_register(
        function($class)
        {
            $folders = ['Controllers', 'Models', 'crossCutting', 'Views'];
            foreach($folders as $folder)
                if(file_exists($folder . '/' . $class . '.php'))
                    require_once($folder . '/' . $class . '.php'));
        }
    );
    
    $aux = new AeronaveDAO();
    $a =  $aux->buscarTodos();

    foreach ($a as $key=>$value) {?>
        <p>
        <?php echo $key . " = " . $value->getID();
        echo " ". $key . " = " . $value->getDestinoID();
        echo " ". $key . " = " . $value->getModelo();
        echo " ". $key . " = " . $value->getQntAssentos();
        echo " ". $key . " = " . $value->getQntAssentosEspecial();?>
        </p><?php
    }?>
