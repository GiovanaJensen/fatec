<?php
/*
2. Escrever outra versão do código proposto acima, sendo que tanto os nomes 
 quanto os salários estejam originalmente em arranjos.
*/

$funcionarios = array(
    'funcionario1' => array("nome" => 'John', 'salario' => 2000),
    'funcionario2' => array("nome" => 'Giovana', 'salario' => 10000),
    'funcionario3' => array("nome" => 'Lucas', 'salario' => 6000),
    'funcionario4' => array("nome" => 'Otavio', 'salario' => 5000 ),
    'funcionario5' => array("nome" => 'Barbara', 'salario' =>  4500),
);

echo "<b>Funcionarios</b>: <br><br>"; 
// l2br ($funcionarios["funcionario1"]["nome"]."\n");

foreach ($funcionarios as $key => $value) {
  

    echo "<br><br>Nome: " . $value["nome"] . " - Salario: " .  $value["salario"] ;
}

?>