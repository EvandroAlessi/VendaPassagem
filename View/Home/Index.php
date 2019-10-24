<?php 
    require('../../DAO/AeronaveDAO.php');

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
