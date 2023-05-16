<?php
class Cachorro extends Animal {
    
    protected $raca;
    protected $cor;

    public function __construct($nome, $idade, $especie, $raca, $cor) {
        parent::__construct($nome, $idade, $especie);
        $this->raca = $raca;
        $this->cor = $cor;
    }

    public function set_raca($raca){
        $this->raca = $raca;
    }

    public function get_raca(){
        return $this->raca;
    }

    public function set_cor($cor){
        $this->cor = $cor;
    }

    public function get_cor(){
        return $this->cor;
    }

    public function latir(){
        return "Au au";
    }

}
?>