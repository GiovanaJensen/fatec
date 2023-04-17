<?php

class Pessoa {
    private $codigo;
    private $nome;
    private $altura;
    private $idade;
    private $nascimento;
    private $escolaridade;
    private $salario;

    function __construct($codigo, $nome,$altura,$idade,$nascimento,$escolaridade,$salario){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;
    }

    public function get_codigo() {
        return $this->codigo;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_altura() {
        return $this->altura;
    }

    public function get_idade() {
        return $this->idade;
    }

    public function get_nascimento() {
        return $this->nascimento;
    }

    public function get_escolaridade(){
        return $this->escolaridade;
    }

    public function get_salario(){
        return $this->salario;
    }

    function __destruct(){
        echo "Objeto {$this->nome} finalizado!";
    }
}

?>