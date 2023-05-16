<?php
/*12. Criar uma aplicação, utilizando as hierarquias de herança, para
representar algumas espécies de animais.*/

class Animal{

    protected $nome;
    protected $idade;
    protected $especie;

    public function __construct($nome, $idade, $especie){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->especie = $especie;
    }

    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function set_idade($idade){
        $this->idade = $idade;
    }

    public function get_idade(){
        return $this->idade;
    }

    public function set_especie($especie){
        $this->especie = $especie;
    }

    public function get_especie(){
        return $this->especie;
    }

}
?>