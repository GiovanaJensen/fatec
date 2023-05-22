<?php

require_once "Conta_Bancaria.class.php";
require_once "Conta_Corrente.php";
require_once "Conta_Poupanca.php";

$contas=array();
$contas[0] = new Conta_Corrente(6754, "CC.1234.56", 300, 400);
$contas[1] = new Conta_Poupanca(6755, "PP.1234.56", 100);

foreach($contas as $key => $conta){
    print "   Conta: {$conta->get_info()} <br>\n";
    print "   Saldo atual: {$conta->get_saldo()} <br>\n";
    $conta->depositar(200);
    print "   Depósito de 200 reais <br>\n";
    print "   Saldo atual: {$conta->get_saldo()} <br>\n";

    if($conta->retirar(700)){
        print "   Retirada de 700 autorizada! <br>\n";
    }else{
        print "   Retirada de 700 não autorizada! <br>\n";
    }

    print "    Saldo atual: {$conta->get_saldo()} <br>\n";
}
?>