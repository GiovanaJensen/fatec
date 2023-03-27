<?php

include_once "Automovel.class.php";

$renault = new Automovel;

$renault->set_marca($_POST['marca']);
$renault->set_cor($_POST['cor']);
$renault->set_modelo($_POST['modelo']);
$renault->set_preco($_POST['preco']);

echo nl2br($renault->get_marca(). "\n");
echo nl2br($renault->get_cor(). "\n");
echo nl2br($renault->get_modelo(). "\n");
echo nl2br($renault->get_preco(). "\n");
?>
