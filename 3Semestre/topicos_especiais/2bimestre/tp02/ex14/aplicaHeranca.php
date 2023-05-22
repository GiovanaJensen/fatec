<?php

require_once "Contabilidade.class.php";
require_once "EmpresaSantosFC.php";
require_once "EmpresaRenner.php";

$santos = new EmpresaSantosFC("Santos FC", 788, 50);
$santos->calcularReceita();
print "Receita: {$santos->get_receita()} <br>\n";
print "Custos: {$santos->get_custos()} <br>\n";

$produtos = [
    ['descricao' => 'Blusa', 'custo' => 100],
    ['descricao' => 'Calça', 'custo' => 150],
];

$custosDiretos = [200, 300];

$renner = new EmpresaRenner("Renner", 50, 180,  $produtos, $custosDiretos);
$renner->calcularReceita();
print "Receita: {$renner->get_receita()} <br>\n";
$custoTotal = $renner->get_custos();
echo "Custo Total da Ordem de Produção: R$ " . $custoTotal;

?>