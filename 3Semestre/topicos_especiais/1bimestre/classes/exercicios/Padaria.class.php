<?php

class Padaria{

    private $produto;
    private $valor;
    private $endereco;

    public function set_produto($produto){
        $this->produto = $produto;
    }

    public function get_produto(){
        return $this->produto;
    }

    public function set_valor($valor){
        $this->valor = $valor;
    }

    public function get_valor(){
        return $this->valor;
    }

    public function set_endereco($endereco){
        $this->endereco = $endereco;
    }

    public function get_endereco(){
        return $this->endereco;
    }
}

?>