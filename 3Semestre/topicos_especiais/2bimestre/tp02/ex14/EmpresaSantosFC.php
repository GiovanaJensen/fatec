<?php

class EmpresaSantosFC extends Contabilidade{

    public function __construct($nome_empresas, $produtos_vendidos, $valor_produtos){
        parent::__construct($nome_empresas, $produtos_vendidos, $valor_produtos);
    }

    public function get_custos() {
        return $this->receita / $this->produtos_vendidos;
    }

}

?>