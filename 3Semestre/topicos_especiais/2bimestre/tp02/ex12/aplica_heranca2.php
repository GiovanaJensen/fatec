<?php

require_once "Animal.class.php";
require_once "Cachorro.php";
require_once "Pinguim.php";
require_once "Pinguim_Imperador.php";

$animal = new Animal("Max",5, "Leão");
$pinguim = new Pinguim("Pablo", 10, "Pinguim-de-magalhães", 60, 20);
$cachorro = new Cachorro("Rex", 3, "Cachorro", "Labrador Retriever", "Marrom");
$pinguim_imperador = new Pinguim_Imperador("Oliver", 15, "Pinguim-Imperador", 100, 40,"Regiões polares", "Antártica");

print "Animal: <br>\n";
print "Nome: {$animal->get_nome()} <br>\n";
print "Idade: {$animal->get_idade()} <br>\n";
print "Espécie: {$animal->get_especie()} <br><br>\n";

print "Pinguim: <br>\n";
print "Nome: {$pinguim->get_nome()} <br>\n";
print "Idade: {$pinguim->get_idade()} <br>\n";
print "Espécie: {$pinguim->get_especie()} <br>\n";
print "Altura: {$pinguim->get_altura()} <br>\n";
print "Peso: {$pinguim->get_peso()} <br><br>\n";

print "Cachorro: <br>\n";
print "Nome: {$cachorro->get_nome()} <br>\n";
print "Idade: {$cachorro->get_idade()} <br>\n";
print "Espécie: {$cachorro->get_especie()} <br>\n";
print "Altura: {$cachorro->get_cor()} <br>\n";
print "Peso: {$cachorro->get_raca()} <br><br>\n";

print "Pinguim: <br>\n";
print "Nome: {$pinguim_imperador->get_nome()} <br>\n";
print "Idade: {$pinguim_imperador->get_idade()} <br>\n";
print "Espécie: {$pinguim_imperador->get_especie()} <br>\n";
print "Altura: {$pinguim_imperador->get_altura()} <br>\n";
print "Peso: {$pinguim_imperador->get_peso()} <br>\n";
print "Habitat: {$pinguim_imperador->get_habitat()} <br>\n";
print "Localização: {$pinguim_imperador->get_localizacao()} <br><br>\n";

?>