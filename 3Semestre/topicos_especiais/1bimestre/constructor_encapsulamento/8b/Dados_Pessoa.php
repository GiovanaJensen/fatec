<?php

include_once "Pessoa.class.php";
include_once "Dados_Complementares.class.php";
include_once "Conta_Bancaria.class.php";

$Willian = new Pessoa(1,"Patrick Willian", 1.75, 19, "03/05/1974", "1° ano faculdade", 756);
$Complemento = new Dados_Complementares("Rua b N° 20", "solteiro", "2° grau técnico");
$conta_Willian = new Conta_Bancaria( $Willian->get_codigo(), $Willian->get_nome(), 100, true);

// manipulação do objeto
echo nl2br("Nome: ". $Willian->get_nome()."\n");
echo nl2br("Código: ". $Willian->get_codigo()."\n");
echo nl2br("Altura: ". $Willian->get_altura()."\n");
echo nl2br("Idade: ". $Willian->get_idade()."\n");
echo nl2br("Nascimento: ". $Willian->get_nascimento()."\n");
echo nl2br("Escolaridade: ". $Willian->get_escolaridade()."\n");
echo nl2br("Salário: ". $Willian->get_salario()."\n");

echo nl2br("\nDADOS COMPLEMENTARES\n");
echo nl2br("Estado Civil: ". $Complemento->get_estado_civil()."\n");
echo nl2br("Grau Instrução: ".  $Complemento->get_grau_instrucao()."\n");
echo nl2br("Endereço: ".  $Complemento->get_endereco()."\n");

echo nl2br("\nCONTA BANCÁRIA\n");
echo nl2br("Código: ".  $conta_Willian->get_codigo()."\n");
echo nl2br("Nome: ".  $conta_Willian->get_nome()."\n");
echo nl2br("Saldo: ".  $conta_Willian->get_saldo()."\n");
echo nl2br("Status: ".  $conta_Willian->get_status()."\n");
?>