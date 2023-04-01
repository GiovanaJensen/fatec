<?php

include_once 'Condominio.class.php';

$Condominio = new Condominio;

$Condominio->set_endereco("Avenida Conselheiro Nébias");
$Condominio->set_apartamentos(12);
$Condominio->set_valor_aluguel(8000);

echo nl2br( "Condomínio"."\n");

echo nl2br("Endereço: ".$Condominio->get_endereco()."\n");
echo nl2br("Número de apartamentos: ".$Condominio->get_apartamentos()."\n");
echo nl2br("Valor Aluguel: ".$Condominio->get_valor_aluguel()."\n");

?>