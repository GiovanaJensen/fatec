<?php

include_once "Pessoa.class.php";
include_once "exercicios/Dados.Complementares.class.php";

$Willian = new Pessoa(1,"Patrick Willian", 1.75, 19, "03/05/1974", "1° ano faculdade", 756);
$Willian_Dados_Complementares = new Dados_Complementares("solteiro", "9973738927", "Av. Ana costa");

// manipulação do objeto

echo nl2br("Nome: ". $Willian->get_nome()."\n");
echo nl2br("Código: ". $Willian->get_codigo()."\n");
echo nl2br("Altura: ". $Willian->get_altura()."\n");
echo nl2br("Idade: ". $Willian->get_idade()."\n");
echo nl2br("Nascimento: ". $Willian->get_nascimento()."\n");
echo nl2br("Escolaridade: ". $Willian->get_escolaridade()."\n");
echo nl2br("Salário: ". $Willian->get_salario()."\n");
echo nl2br("Estado Civil: ". $Willian_Dados_Complementares->get_estado_civil()."\n");
echo nl2br("Telefone: ".  $Willian_Dados_Complementares->get_telefone()."\n");
echo nl2br("Endereço: ".  $Willian_Dados_Complementares->get_endereco()."\n");
?>