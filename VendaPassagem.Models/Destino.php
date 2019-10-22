<?php 
    public class Destino{
        private codAeroporto;
        private nomeAeroporto;
        private taxaEmbarque;
    }

    $destino = new Destino();
    $destino->codAeroporto = 'asdas';
    $destino->nomeAeroporto = 'asdas';
    $destino->taxaEmbarque = 'asdas';
    $destino->save();

    $destino->delete();

    $destinos = Destino::all();

?>