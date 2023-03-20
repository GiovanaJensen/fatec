<?php

class Dados_Complementares{
    private $estado_civil;
    private $telefone;
    private $endereco;

    function __constructor($estado_civil, $telefone, $endereco){
        $this->estado_civil = $estado_civil;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    public function get_estado_civil() {
        return $this->estado_civil;
    }

    public function get_telefone(){
        return $this->telefone;
    }

    public function get_endereco(){
        return $this->endereco;
    }

    function __destruct(){
        echo "Objeto finalizado!";
    }
}

?>