<?php 
    class Voo {
        private $ID;
        private $aeronaveID;
        private $dataPartida;
        private $valorPassagem;

        public function __construct($id, $aeronaveID, $dataPartida, $valorPassagem) {
            $this->ID = $id;
            $this->aeronaveID = $AeronaveID;
            $this->dataPartida = $dataPartida;
            $this->valorPassagem = $valorPassagem;
        }

        public function getID(){
            return $this->ID;
        }

        public function getAeronaveID(){
            return $this->aeronaveID;
        }

        public function getDataPartida(){
            return $this->dataPartida;
        }

        public function getValorPassagem(){
            return $this->valorPassagem;
        }

        public function setID($id){
            $this->ID = $id;
        }

        public function setAeronaveID($aeronaveID){
            $this->aeronaveID = $aeronaveID;
        }

        public function setDataPartida($dataPartida){
            $this->dataPartida = $dataPartida;
        }

        public function setValorPassagem($valorPassagem){
            $this->valorPassagem = $valorPassagem;
        }
    }
?>