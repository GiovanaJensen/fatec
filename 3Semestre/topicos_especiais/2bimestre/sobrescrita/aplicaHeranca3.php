<?php

require_once "Conta_Bancaria.class.php";
require_once "Conta_Corrente.php";
require_once "Conta_Poupanca.php";

$cb = new Conta_Bancaria(6753, "CC.0992.92", 100);
$cc = new Conta_Corrente(6754, "CC.1234.56", 200, 200);
$cp = new Conta_Poupanca(6755, "PP.1234.56", 500);

print "Conta Bancária: {$cb->get_info()} <br>\n";
print "Saldo atual: {$cb->get_saldo()} <br>\n";
$cb->depositar(0.90);
print "Depósito de 0.90 realizado <br>\n";
print "Saldo atual: {$cb->get_saldo()} <br>\n";
$cb->contabilizar(0.66);
print "Saldo atual: {$cb->get_saldo()} <br>\n";

print "Conta Bancária: {$cc->get_info()} <br>\n";
print "Saldo atual: {$cc->get_saldo()} <br>\n";
$cc->depositar(-500.90);
print "Depósito de -500.90 realizado <br>\n";
print "Saldo atual: {$cc->get_saldo()} <br>\n";
$cc->contabilizar(-1.66);
print "Saldo atual: {$cc->get_saldo()} <br>\n";

print "Conta Bancária: {$cp->get_info()} <br>\n";
print "Saldo atual: {$cp->get_saldo()} <br>\n";
$cp->depositar(70.50);
print "Depósito de -500.90 realizado <br>\n";
print "Saldo atual: {$cp->get_saldo()} <br>\n";
$cp->contabilizar(3.36);
print "Saldo atual: {$cp->get_saldo()} <br>\n";
?>