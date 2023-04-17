<?php

require_once "Fruta.class.php";
require_once "Laranja.php";
require_once "Laranja_Bahia.php";

require_once "Uva.php";
require_once "Uva_Verde.php";
require_once "Uva_Rosada.php";

$f = new Laranja_Bahia("laranja bahia está bem doce");
$f->set_arvore("laranjeira");
$f->set_nome_fruta("laranja bahia");
$f->set_preco(8.22);
$f->set_cor("amarelo");

echo nl2br("dá na árvore: ".$f->get_arvore()."\n");
echo nl2br("fruta: ".$f->get_nome_fruta()."\n");
echo nl2br("preço: R$".$f->get_preco()."\n");
echo nl2br("cor: ".$f->get_cor()."\n<br>");

$g = new Laranja("laranja lima está azeda");
$g->set_arvore("laranjeira");
$g->set_nome_fruta("laranja lima");
$g->set_preco(6.05);
$g->set_cor("amarelo-esverdeado");

echo nl2br("dá na árvore: ".$g->get_arvore()."\n");
echo nl2br("fruta: ".$g->get_nome_fruta()."\n");
echo nl2br("preço: R$".$g->get_preco()."\n");
echo nl2br("cor: ".$g->get_cor()."\n<br>");

$h = new Fruta("maçã argentina está bem grande");
$h->set_arvore("macieira");
$h->set_nome_fruta("maçã");
$h->set_preco(12.66);

echo nl2br("dá na árvore: ".$h->get_arvore()."\n");
echo nl2br("fruta: ".$h->get_nome_fruta()."\n");
echo nl2br("preço: R$".$h->get_preco()."\n<br>");

$i = new Uva_Rosada("uva rosada está doce");
$i->set_arvore("parreira");
$i->set_nome_fruta("uva rosada");
$i->set_preco(12.00);
$i->set_cor("roxo");

echo nl2br("dá na árvore: ".$i->get_arvore()."\n");
echo nl2br("fruta: ".$i->get_nome_fruta()."\n");
echo nl2br("preço: R$".$i->get_preco()."\n");
echo nl2br("cor: ".$i->get_cor()."\n<br>");

$j = new Uva_Verde("uva verde está doce");
$j->set_arvore("parreira");
$j->set_nome_fruta("uva verde");
$j->set_preco(12.00);
$j->set_cor("verde");

echo nl2br("dá na árvore: ".$j->get_arvore()."\n");
echo nl2br("fruta: ".$j->get_nome_fruta()."\n");
echo nl2br("preço: R$".$j->get_preco()."\n");
echo nl2br("cor: ".$j->get_cor()."\n<br>");

$k = new Uva("uva está doce");
$k->set_arvore("parreira");
$k->set_nome_fruta("uva");
$k->set_preco(12.00);
$k->set_cor("roxo");

echo nl2br("dá na árvore: ".$k->get_arvore()."\n");
echo nl2br("fruta: ".$k->get_nome_fruta()."\n");
echo nl2br("preço: R$".$k->get_preco()."\n");
echo nl2br("cor: ".$k->get_cor()."\n<br>");
?>