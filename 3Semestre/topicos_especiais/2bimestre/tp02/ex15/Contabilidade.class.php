<?php

abstract class Contabilidade{

    protected $nome_empresas;
    protected $produtos_vendidos;
    protected $valor_produtos;
    protected $receita;

    public function __construct($nome_empresas, $produtos_vendidos, $valor_produtos){
        $this->nome_empresas = $nome_empresas;
        $this->produtos_vendidos = $produtos_vendidos;
        $this->valor_produtos = $valor_produtos;
    }

    public function get_nome(){
        return $this->nome_empresas;
    }

    public function set_produtosVendidos($produtos_vendidos){
        $this->produtos_vendidos = $produtos_vendidos;
    }

    public function get_produtosVendidos(){
        return $this->produtos_vendidos;
    }

    public function set_valorProdutos($valor_produtos){
        $this->valor_produtos = $valor_produtos;
    }   

    public function get_valorProdutos(){
        return $this->valor_produtos;
    }

    public function calcularReceita(){
        $this->receita = $this->valor_produtos * $this->produtos_vendidos;
    }

    public function get_receita(){
        return $this->receita;
    }

    abstract public function get_custos();
}

?>