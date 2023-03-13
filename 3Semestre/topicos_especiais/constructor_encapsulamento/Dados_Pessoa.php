<?php

include_once "Pessoa.class.php";
include_once "exercicios/Dados.Complementares.class.php";

$Giovana = new Pessoa(1,"Giovana",1.57,19,"01/06/2003","2° ano faculdade", 0.00);
$Giovana_Dados_Complementares = new Dados_Complementares("solteira", "9973738927", "Av. Ana costa");

// manipulação do objeto

echo nl2br("Nome: ". $Giovana->get_nome()."\n");
echo nl2br("Código: ". $Giovana->get_codigo()."\n");
echo nl2br("Altura: ". $Giovana->get_altura()."\n");
echo nl2br("Idade: ". $Giovana->get_idade()."\n");
echo nl2br("Nascimento: ". $Giovana->get_nascimento()."\n");
echo nl2br("Escolaridade: ". $Giovana->get_escolaridade()."\n");
echo nl2br("Salário: ". $Giovana->get_salario()."\n");
echo nl2br("Estado Civil: ". $Giovana_Dados_Complementares->get_estado_civil()."\n");
echo nl2br("Telefone: ". $Giovana_Dados_Complementares->get_telefone()."\n");
echo nl2br("Endereço: ". $Giovana_Dados_Complementares->get_endereco()."\n");
?>