<?php

class EmpresaRenner extends Contabilidade{

    protected $produtos;
    protected $custosDiretos;

    public function __construct($nome_empresas, $produtos_vendidos, $valor_produtos, $produtos, $custosDiretos){
        parent::__construct($nome_empresas, $produtos_vendidos, $valor_produtos);
        $this->produtos = $produtos;
        $this->custosDiretos = $custosDiretos;
    }

    public function get_custos() {
        $custoTotal = 0;
        foreach ($this->produtos as $produto) {
            $custoTotal += $produto['custo'];
        }
        foreach ($this->custosDiretos as $custoDireto) {
            $custoTotal += $custoDireto;
        }
        return $custoTotal;
    }

}

?>