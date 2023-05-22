<?php

class Consignado extends Conta_Corrente{
    
    protected $emprestimo;
    protected $divida;

    public function __construct($agencia, $conta, $saldo, $limite, $divida){
        parent::__construct($agencia, $conta, $saldo, $limite);
        $this->divida = $divida;
    }

    public function set_emprestimo($emprestimo){
        $this->emprestimo = $emprestimo;
    }

    public function get_emprestimo(){
        return $this->emprestimo;
    }

    public function get_divida(){
        return $this->divida;
    }

}

?>