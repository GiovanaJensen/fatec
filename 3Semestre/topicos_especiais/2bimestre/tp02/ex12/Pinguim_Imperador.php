<?php

class Pinguim_Imperador extends Pinguim{

    protected $habitat;
    protected $localizacao;

    public function __construct($nome, $idade, $especie, $altura, $peso, $habitat, $localizacao){
        parent::__construct($nome, $idade, $especie, $altura, $peso);
        $this->habitat = $habitat;
        $this->localizacao = $localizacao;
    }

    public function set_habitat($habitat){
        $this->habitat = $habitat;
    }

    public function get_habitat(){
        return $this->habitat;
    }

    public function set_localizacao($localizacao){
        $this->localizacao = $localizacao;
    }

    public function get_localizacao(){
        return $this->localizacao;
    }

}

?>