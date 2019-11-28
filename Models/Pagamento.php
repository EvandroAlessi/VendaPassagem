<?php 

namespace VendaPassagem\Models;

interface Pagamento {
    const CARTAO_CREDITO = 1;
    const DINHEIRO = 2;
    const BOLETO = 3;
    const DEPOSITO = 4;
    const CONVENIO = 5;
}
?>