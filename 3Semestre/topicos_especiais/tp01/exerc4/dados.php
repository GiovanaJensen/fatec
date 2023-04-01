<?php

/* 4. Escrever código que mostre os elementos de um arranjo fora da ordenação dos
índices dos elementos através do uso do “sort”. */

$frutas = ["maçã", "banana", "limão", "laranja", "pessego"];

sort($frutas);

foreach($frutas as $fruta){
    echo "$fruta <br>";
}
?>