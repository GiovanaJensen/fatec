<?php

/* 9. Criar aplicação que acesse através de variáveis de instância as classes Condomínio
e Padaria, e que possa inserir valores aos atributos de ambas e mostrá-los no navegador */

include_once '../exerc7/Condominio.class.php';
include_once '../exerc8/Padaria.class.php';

$Condominio = new Condominio;
$Padaria = new Padaria;

$Condominio->set_endereco("Avenida Conselheiro Nébias");
$Condominio->set_apartamentos(12);
$Condominio->set_valor_aluguel(8000);

echo nl2br( "Condomínio"."\n");

echo nl2br("Endereço: ".$Condominio->get_endereco()."\n");
echo nl2br("Número de apartamentos: ".$Condominio->get_apartamentos()."\n");
echo nl2br("Valor Aluguel: ".$Condominio->get_valor_aluguel()."\n");

$Padaria->set_produto("Pão");
$Padaria->set_valor(0.5);
$Padaria->set_endereco("Avenida Conselheiro Nébias");

echo nl2br("\n\n"."Padaria". "\n");

echo nl2br("Endereço: ".$Padaria->get_endereco()."\n");
echo nl2br("Produto: ".$Padaria->get_produto()."\n");
echo nl2br("Valor : ".$Padaria->get_valor()." centavos"."\n");

?>
