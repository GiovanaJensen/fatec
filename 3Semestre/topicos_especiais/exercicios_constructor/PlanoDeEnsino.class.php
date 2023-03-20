<?php

/* 1. Criar o objeto “Plano de Ensino” com os atributos: matéria,
conteúdo programático, critério de avaliação e bibliografia;
2. Criar uma versão do método construtor onde os atributos
possam ser inicializados com valores;
3. Criar os respectivos métodos sets( ) e gets( ) para cada
atributo;
 */

class PlanoDeEnsino {
    //1
    private $materia;
    private $conteudo_programatico;
    private $criterios_avaliacao;
    private $bibliografia;


    //2
    function __constructor($materia, $conteudo_programatico, $criterios_avaliacao, $bibliografia){
        $this->materia = $materia;
        $this->conteudo_programtico = $conteudo_programatico;
        $this->criterios_avaliacao = $criterios_avaliacao;
        $this->bibliografia = $bibliografia;
    }

    //3
    public function set_materia($materia){
        $this->materia = $materia;
    }

    public function get_materia(){
        return $this->materia;
    }

    public function set_conteudo_programatico($conteudo_programatico){
        $this->conteudo_programatico = $conteudo_programatico;
    }

    public function get_conteudo_programatico(){
        return $this->conteudo_programatico;
    }

    public function set_criterios_avaliacao($criterios_avaliacao){
        $this->criterios_avaliacao = $criterios_avaliacao;
    }

    public function get_criterios_avaliacao(){
        return $this->criterios_avaliacao;
    }

    public function set_bibliografia($bibliografia){
        $this->bibliografia = $bibliografia;
    }

    public function get_bibliografia(){
        return $this->bibliografia;
    }
}

?>