<?php

include_once "QuartoCicloSi.class.php";

$SI = new QuartoCicloSI;

$SI->set_materia($_POST['materia']);
$SI->set_professor($_POST['professor']);
$SI->set_fatec($_POST['fatec']);
$SI->set_quantidadeAlunos($_POST['quantidade_alunos']);
$SI->set_periodo($_POST['periodo']);

echo nl2br($SI->get_materia(). "\n");
echo nl2br($SI->get_professor(). "\n");
echo nl2br($SI->get_fatec(). "\n");
echo nl2br($SI->get_quantidadeAlunos(). "\n");
echo nl2br($SI->get_periodo(). "\n");
?>