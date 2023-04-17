<?php

/* 6.Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos
do mesmo através do uso do “array_slice” . */

$frutas = ["maçã", "banana", "limão", "laranja", "pessego"];

$frutas2 = array_slice($frutas, 2);

foreach($frutas2 as $fruta){
    echo "$fruta <br>";
}
?>