<?php

class Condominio {

    private $endereco;
    private $apartamentos;
    private $valor_aluguel;

    public function set_endereco($endereco){
        $this->endereco = $endereco;
    }

    public function get_endereco(){
        return $this->endereco;
    }

    public function set_apartamentos($apartamentos){
        $this->apartamentos = $apartamentos;
    }

    public function get_apartamentos(){
        return $this->apartamentos;
    }

    public function set_valor_aluguel($valor){
        $this->valor = $valor;
    }

    public function get_valor_aluguel(){
        return $this->valor;
    }

}

?>