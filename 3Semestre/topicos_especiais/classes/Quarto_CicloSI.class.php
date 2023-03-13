<?php

class Quarto_CicloSI{

    //atributos

    private $materia;
    private $professor;
    private $fatec;
    private $quantidade_alunos;
    private $periodo;

    // set() e get()

    public function set_materia($materia){
        $this->materia = $materia;
    }

    public function get_materia(){
        return $this->materia;
    }

    public function set_professor($professor){
        $this->professor = $professor;
    }

    public function get_professor(){
        return $this->professor;
    }

    public function set_fatec($fatec){
        $this->fatec = $fatec;
    }

    public function get_fatec(){
        return $this->fatec;
    }

    public function set_quantidade_alunos($quantidade_alunos){
        $this->quantidade_alunos = $quantidade_alunos;
    }

    public function get_quantidade_alunos(){
        return $this->quantidade_alunos;
    }

    public function set_periodo($periodo){
        $this->periodo = $periodo;
    }

    public function get_periodo(){
        return $this->periodo;
    }

}

    

?>