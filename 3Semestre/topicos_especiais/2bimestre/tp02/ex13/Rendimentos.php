<?php

class Rendimentos extends Conta_Poupanca{

    protected $taxaRendimento; //porcentagem
    protected $periodoCalculo; //em meses
    protected $valorAcumulado;

    public function __construct($agencia, $conta, $saldo, $taxaRendimento, $periodoCalculo){
        parent::__construct($agencia, $conta, $saldo);
        $this->taxaRendimento = $taxaRendimento;
        $this->periodoCalculo = $periodoCalculo;
    }

    public function calcularRendimentos(){
        $rendimentoAnual = $this->get_saldo() * ($this->taxaRendimento/100);
        $rendimentoPeriodo = $rendimentoAnual * ($this->periodoCalculo/12);
        $this->valorAcumulado += $rendimentoPeriodo;
        return $this->valorAcumulado;
    }

    public function exibirRendimentos(){
        return $this->calcularRendimentos();
    }

}

?>