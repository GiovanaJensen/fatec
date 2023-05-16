<?php
class Pinguim extends Animal{
    
    protected $altura;
    protected $peso;

    public function __construct($nome, $idade, $especie, $altura, $peso){
        parent::__construct($nome, $idade, $especie);
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function set_altura($altura){
        $this->altura = $altura;
    }

    public function get_altura(){
        return $this->altura;
    }

    public function set_peso($peso){
        $this->peso = $peso;	
    }

    public function get_peso(){
        return $this->peso;
    }

}
?>