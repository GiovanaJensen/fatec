<?php

require_once "Contabilidade.class.php";
require_once "EmpresaSantosFC.php";
require_once "EmpresaRenner.php";

$santos = new EmpresaSantosFC("Santos FC", 788, 50);
print "Empresa: {$santos->get_nome()} <br>\n";
print "Produtos Vendidos: {$santos->get_produtosVendidos()} <br>\n";
print "Valor do produto: R$ {$santos->get_valorProdutos()} <br>\n";
$santos->calcularReceita();
print "Receita: R$ {$santos->get_receita()} <br>\n";
print "Custos: R$ {$santos->get_custos()} <br><br>\n";

$produtos = [
    ['descricao' => 'Blusa', 'custo' => 100],
    ['descricao' => 'Calça', 'custo' => 150],
];

$custosDiretos = [200, 300];

$renner = new EmpresaRenner("Renner", 50, 180,  $produtos, $custosDiretos);
print "Empresa: {$renner->get_nome()} <br>\n";
print "Produtos vendidos: {$renner->get_produtosVendidos()} <br>\n";
print "Valor do produto: R$ {$renner->get_valorProdutos()} <br>\n";
$renner->calcularReceita();
print "Receita: R$ {$renner->get_receita()} <br>\n";
$custoTotal = $renner->get_custos();
echo "Custo Total da Ordem de Produção: R$ " . $custoTotal;

?>