<?php

class EmpresaSantosFC extends Contabilidade{

    public function __construct($nome_empresas, $produtos_vendidos, $valor_produtos){
        parent::__construct($nome_empresas, $produtos_vendidos, $valor_produtos);
    }

    public function get_custos() {
        return $this->receita / $this->produtos_vendidos;
    }

    public function get_custosDiretos(){
        $custoDireto = $this->produtos_vendidos * $this->valor_produtos;
        return $custoDireto;
    }

}

?>