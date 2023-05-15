<?php
class Conta_Poupanca1 extends Conta{
    public function __construct($agencia,$conta, $saldo){
        parent::__construct($agencia,$conta,$saldo);
    }

    public function retirar($quantia){
        $this->saldo = (100.00 + $quantia);
    }
}
?>