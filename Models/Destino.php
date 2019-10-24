<?php 
    class Destino {
        private $ID;
        private $nomeAeroporto;
        private $taxaEmbarque;

        public function __construct($id, $nomeAeroporto, $taxaEmbarque) {
            $this->ID = $id;
            $this->nomeAeroporto = $nomeAeroporto;
            $this->taxaEmbarque = $taxaEmbarque;
        }

        public function getID(){
            return $this->ID;
        }

        public function getNomeAeroporto(){
            return $this->nomeAeroporto;
        }

        public function getTaxaEmbarque(){
            return $this->taxaEmbarque;
        }

        public function setID($id){
            $this->ID = $id;
        }

        public function setNomeAeroporto($nomeAeroporto){
            $this->nomeAeroporto = $nomeAeroporto;
        }

        public function setTaxaEmbarque($taxaEmbarque){
            $this->taxaEmbarque = $taxaEmbarque;
        }
    }
?>