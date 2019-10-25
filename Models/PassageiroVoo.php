<?php 

namespace VendaPassagem\Models;

class PassageiroVoo {
    private $vooID;
    private $passageiroID;
    private $numAssento;
    private $solicitacoes;
    private $tipoAssento;
    private $formaPagamento;
    private $valorPagamento;

    public function __construct($vooID, $passageiroID, $numAssento, $solicitacoes, $tipoAssento, $formaPagamento, $valorPagamento) {
        $this->vooID = $vooID;
        $this->passageiroID = $passageiroID;
        $this->numAssento = $numAssento;
        $this->solicitacoes = $solicitacoes;
        $this->tipoAssento = $tipoAssento;
        $this->formaPagamento = $formaPagamento;
        $this->valorPagamento = $valorPagamento;
    }

    public function getVooID(){
        return $this->vooID;
    }

    public function getPassageiroID(){
        return $this->passageiroID;
    }

    public function getNumAssento(){
        return $this->numAssento;
    }

    public function getSolicitacoes(){
        return $this->solicitacoes;
    }

    public function getTipoAssento(){
        return $this->tipoAssento;
    }

    public function getFormaPagamento(){
        return $this->formaPagamento;
    }

    public function getValorPagamento(){
        return $this->valorPagamento;
    }

    public function setVooID($vooID){
        $this->vooID = $vooID;
    }

    public function setPassageiroID($passageiroID){
        $this->passageiroID = $passageiroID;
    }

    public function setNumAssento($numAssento){
        $this->numAssento = $numAssento;
    }

    public function setSolicitacoes($solicitacoes){
        $this->solicitacoes = $solicitacoes;
    }

    public function setTipoAssento($tipoAssento){
        $this->tipoAssento = $tipoAssento;
    }

    public function setFormaPagamento($formaPagamento){
        $this->formaPagamento = $formaPagamento;
    }

    public function setValorPagamento($valorPagamento){
        $this->valorPagamento = $valorPagamento;
    }
}
?>