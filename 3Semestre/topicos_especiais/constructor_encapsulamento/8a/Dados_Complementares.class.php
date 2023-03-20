<?php

class Dados_Complementares{
    private $endereco;
    private $estado_civil;
    private $grau_instrucao;

    public function __construct($endereco, $estado_civil, $grau_instrucao){
        $this->endereco = $endereco;
        $this->estado_civil = $estado_civil;
        $this->grau_instrucao = $grau_instrucao;
    }

    public function get_endereco(){
        return $this->endereco;
    }

    public function get_estado_civil() {
        return $this->estado_civil;
    }

    public function get_grau_instrucao() {
        return $this->grau_instrucao;
    }
}

?>