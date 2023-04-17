<?php

/*Criar uma classe Conta_Bancária.class, com dados bancários relativos à classe Pessoa.class. 
Atualizar a aplicação Acessa_construtor para inserir e consultar dados da conta bancária e pessoais do Sr. Willian*/

class Conta_Bancaria {
    private $codigo;
    private $nome;
    private $saldo;
    private $status; // negativo ou positivo

    function __construct($codigo, $nome, $saldo, $status){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->saldo = $saldo;
        $this->status = $status;
    }

    public function get_codigo() {
        return $this->codigo;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function get_saldo(){
        return $this->saldo;
    }

    public function get_status(){
        return $this->status;
    }

    function __destruct(){
        echo "Objeto Conta Bancaria {$this->nome} finalizado!";
    }
}

?>