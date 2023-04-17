<?php

include_once "Quarto_CicloSI.class.php";

$SI = new Quarto_CicloSI;

$SI->set_materia("Tópicos Especiais");
$SI->set_professor("Mauricio");
$SI->set_fatec("Baixada Santista");
$SI->set_quantidade_alunos(34);
$SI->set_periodo("manhã");

echo nl2br($SI->get_materia()."\n");
echo nl2br($SI->get_professor()."\n");
echo nl2br($SI->get_fatec()."\n");
echo nl2br($SI->get_quantidade_alunos()."\n");
echo nl2br($SI->get_periodo()."\n");

?>