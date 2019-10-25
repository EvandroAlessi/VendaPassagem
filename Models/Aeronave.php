<?php 

namespace VendaPassagem\Models;

class Aeronave {
    private $ID;
    private $destinoID;
    private $modelo;
    private $qntAssentos;
    private $qntAssentosEspecial;

    public function __construct($id, $destinoID, $modelo, $qntAssentos, $qntAssentosEspecial) {
        $this->ID = $id;
        $this->destinoID = $destinoID;
        $this->modelo = $modelo;
        $this->qntAssentos = $qntAssentos;
        $this->qntAssentosEspecial = $qntAssentosEspecial;
    }

    public function getID(){
        return $this->ID;
    }

    public function getDestinoID(){
        return $this->destinoID;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getQntAssentos(){
        return $this->qntAssentos;
    }

    public function getQntAssentosEspecial(){
        return $this->qntAssentosEspecial;
    }

    public function setID($id){
        $this->ID = $id;
    }

    public function setDestinoID($destinoID){
        $this->destinoID = $destinoID;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setQntAssentos($qntAssentos){
        $this->qntAssentos = $qntAssentos;
    }

    public function setQntAssentosEspecial($qntAssentosEspecial){
        $this->qntAssentosEspecial = $qntAssentosEspecial;
    }
}
?>