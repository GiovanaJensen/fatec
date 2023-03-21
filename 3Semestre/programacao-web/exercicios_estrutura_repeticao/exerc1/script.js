/*Construa um programa que apresente o peso total que será carregado por um caminhão.
Sabe-se que esse caminhão carrega 25 caixas, com pesos diferentes. Será entrada do
programa o peso (P) de cada uma das caixas. */

var peso = 0;

for(var i=1; i<=25; i++){
    peso += parseInt(prompt("Digite o peso da caixa " + i + ":"));
}
console.log("Peso total: " + peso);