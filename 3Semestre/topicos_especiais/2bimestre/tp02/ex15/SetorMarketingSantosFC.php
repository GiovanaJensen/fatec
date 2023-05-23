<?php

class SetorMarketingSantosFC extends EmpresaSantosFC{

    protected $qtd_horas;
    protected $custo_hora;

    public function __construct($nome_empresas, $produtos_vendidos, $valor_produtos, $qtd_horas, $custo_hora){
        parent::__construct($nome_empresas, $produtos_vendidos, $valor_produtos);
        $this->qtd_horas = $qtd_horas;
        $this->custo_hora = $custo_hora;
    }

    public function set_qtdHoras($qtd_horas){
        $this->qtd_horas = $qtd_horas;	
    }

    public function get_qtdHoras(){
        return $this->qtd_horas;
    }

    public function set_custoHora($custo_hora){
        $this->custo_hora = $custo_hora;
    }

    public function get_custoHora() {
        return $this->custo_hora;
    }

    public function get_custosDiretos(){
        $custoDireto = $this->qtd_horas * $this->custo_hora;
        return $custoDireto;
    }

}

?>