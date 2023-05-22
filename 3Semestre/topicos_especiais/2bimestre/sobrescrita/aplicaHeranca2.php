<?php

require_once "Conta_Bancaria.class.php";
require_once "Conta_Corrente.php";
require_once "Conta_Poupanca.php";
require_once "Consignado.php";

$consig = new Consignado(6437, "CC.2354.28", 3000, 8800, 10000);

print "Consignado: {$consig->get_info()} <br>\n";
print "Saldo atual: {$consig->get_saldo()} <br>\n";
$consig->depositar(330);
print "Depósito de 330 reais <br>\n";
print "Saldo atual: {$consig->get_saldo()} <br>\n";
$consig->retirar(100);
print "Retirada de 100 reais <br>\n";
print "Saldo atual: {$consig->get_saldo()} <br>\n";
$consig->set_emprestimo(600.87);
$divida_total=($consig->get_divida() + $consig->get_emprestimo());
print "Dívida total = R$:{$divida_total} <br>\n";  

?>