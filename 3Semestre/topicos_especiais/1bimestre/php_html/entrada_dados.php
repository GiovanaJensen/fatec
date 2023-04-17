<?php
/*
$_POST → envio de dados por formulário;
$_GET → envio de dados por url. Ex: http://localhost/aplicação.php?variável=xx
*/

$nome = $_POST['nome'];
echo "Nome: $nome";
?>