<?php

/*
3. Dada uma relação de 10 pares funcionário – salário, escrever versão do código
 em que sejam impressos os pares onde o salário seja maior que R$1000.00.
*/

$funcionarios = array(
    'funcionario1' => array("nome" => 'John', 'salario' => 2000),
    'funcionario2' => array("nome" => 'Giovana', 'salario' => 1000),
    'funcionario3' => array("nome" => 'Lucas', 'salario' => 600),
    'funcionario4' => array("nome" => 'Otavio', 'salario' => 500 ),
    'funcionario5' => array("nome" => 'Josefa', 'salario' =>  450),
    'funcionario6' => array("nome" => 'Taylor', 'salario' =>  12000),
    'funcionario7' => array("nome" => 'Adryan', 'salario' =>  180),
    'funcionario8' => array("nome" => 'Nick Jonas', 'salario' =>  400),
    'funcionario9' => array("nome" => 'Joe', 'salario' =>  40000),
    'funcionario10' => array("nome" => 'Kevin', 'salario' =>  13500),
);

foreach ($funcionarios as $key => $value) {
    
    if($value["salario"] > 1000) {
        echo "<br><br>Nome: " . $value["nome"] . " - Salario: " .  $value["salario"] ;
    }

}


?>