<?php

/*13. Criar uma classe “Rendimentos.php”, filha de “Conta_Poupança.php”.
Criar também a aplicação onde se possa acessar propriedades de Rendimentos e
das classes que estão acessíveis a ela através da hierarquia de Herança.
Considerar o exemplo “Consignado.php”. Criar na classe pedida uma versão do
método sobrescrito.*/

require_once "Conta_Bancaria.class.php";
require_once "Conta_Poupanca.php";
require_once "Rendimentos.php";

$rendimentos= new Rendimentos(6755, "PP.1234.56", 500, 50, 10);
$cb = new Conta_Bancaria(6753, "CC.0992.92", 100);
$cp = new Conta_Poupanca(6755, "PP.1234.56", 500);

print "Conta Bancária: {$rendimentos->get_info()} <br>\n";
print "Saldo atual: {$rendimentos->get_saldo()} <br>\n";
$rendimentos->depositar(70.50);
print "Depósito de -500.90 realizado <br>\n";
print "Saldo atual: {$rendimentos->get_saldo()} <br>\n";
$rendimentos->retirar(20);
print "Retirada de 20 reais realizado <br>\n";
print "Saldo atual: {$rendimentos->get_saldo()} <br>\n";
print "Valor acumulado: {$rendimentos->exibirRendimentos()} <br>\n";
print "Saldo atual: {$rendimentos->get_saldo()} <br><br>\n";

print "Conta Bancária: {$cb->get_info()} <br>\n";
print "Saldo atual: {$cb->get_saldo()} <br>\n";
$cb->depositar(0.90);
print "Depósito de 0.90 realizado <br>\n";
print "Saldo atual: {$cb->get_saldo()} <br>\n";
print "Valor acumulado: {$cb->calcularRendimentos()} <br>\n";
print "Saldo atual: {$cb->get_saldo()} <br><br>\n";

print "Conta Bancária: {$cp->get_info()} <br>\n";
print "Saldo atual: {$cp->get_saldo()} <br>\n";
$cp->depositar(70.50);
print "Depósito de -500.90 realizado <br>\n";
print "Saldo atual: {$cp->get_saldo()} <br>\n";
print "Valor acumulado: {$cp->calcularRendimentos()} <br>\n";
print "Saldo atual: {$cp->get_saldo()} <br>\n";


?>