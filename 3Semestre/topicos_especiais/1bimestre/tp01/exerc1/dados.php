<?php

/*Escrever código que possua uma função que receba como argumentos o nome e o 
salário de funcionários de uma empresa. A aplicação deve imprimir em cada linha o nome e o 
respectivo salário dos funcionários (pelo menos 3). */

function funcionario_salario($nome, $salario){
    echo "Nome: $nome e salário: $salario <br>";
}


funcionario_salario("João", 500);
funcionario_salario("Maria", 50000);
funcionario_salario("Betina", 30000);
funcionario_salario("Otávio", 3000);

?>