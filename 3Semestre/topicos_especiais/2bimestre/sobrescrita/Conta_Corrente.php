<?php
class Conta_Corrente extends Conta_Bancaria{
    
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar($quantia){
        if(($this->saldo + $this->limite) >= $quantia){
            $this->saldo -= $quantia;
        }else{
            return false;
        }
        return true;
    }

    public function contabilizar($saldo){
        $this-> saldo -= 0.85;
        print "Acesso pela classe Conta_Corrente <br>\n";
    }

}
?>