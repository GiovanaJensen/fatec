<?php

/*4. Criar aplicação executável e criar variáveis de instância para
inserir os valores dos atributos através do método construtor e
pelos métodos sets( );
5. Retornar os valores inseridos pelos métodos gets( ),
mostrando-os no navegador. */

include_once "PlanoDeEnsino.class.php";

//4
$historia = new PlanoDeEnsino("História", ["pré-história", "egito", "grécia e roma"], "média das notas da prova", ["A história do mundo para quem tem pressa"]);

$historia->set_materia("História antiga");
$historia->set_conteudo_programatico(["pré-história", "egito", "grécia", "império romano"]);
$historia->set_criterios_avaliacao("média das notas da prova e dos trabalhos");
$historia->set_bibliografia(["A história do mundo para quem tem pressa", "grécia e roma"]);

//5
echo nl2br("Matéria: ".  $historia->get_materia()."\n");
echo nl2br("Conteúdo Programático: ".  $historia->get_conteudo_programatico()."\n");
echo nl2br("Critérios de avaliação: ".  $historia->get_criterios_avaliacao()."\n");
echo nl2br("Bibliografia: ".  $historia->get_bibliografia()."\n");
?>