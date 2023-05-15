<?php
require_once 'Conta.class.php';
require_once 'Conta_Poupanca1.php';
require_once 'Conta_Corrente1.php';

$cc = new Conta_Corrente1(121268, "CC.33868.88", 1000, 800);
$cp = new Conta_Poupanca1(15620, "CC.82156.99", 600.88);

print "Conta Corrente: {$cc->get_info()} <br>\n";
print "Saldo Atual: {$cc->get_saldo()} <br>\n";
$cc->depositar(-500.90);
print "Depósito de -500.90 <br>\n";
print "Saldo Atual: {$cc->get_saldo()} <br>\n";
$cc->retirar(80.66);
print "Retirada de 80.66 <br>\n";
print "Saldo Atual: {$cc->get_saldo()} <br>\n";

print "Conta Poupança: {$cp->get_info()} <br>\n";
print "Saldo Atual: {$cp->get_saldo()} <br>\n";
$cp->depositar(70.50);
print "Depósito de 70.50 <br>\n";
print "Saldo Atual: {$cp->get_saldo()} <br>\n";
$cp->retirar(40.36);
print "Retirada de 40.36 <br>\n";
print "Saldo Atual: {$cp->get_saldo()} <br>\n";

?>