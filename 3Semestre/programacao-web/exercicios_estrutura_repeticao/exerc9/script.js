/*Construa um programa que leia o conjunto de 20 números inteiros e mostre qual foi o maior e
o menor valor fornecido. */

var maior = 0;
var menor = 40000;

for(var i=1; i<=20; i++){
  var num = parseInt(prompt("Digite o valor do " + i + "° número:"));
  if(num > maior){
    maior = num;
  }
  if(num < menor){
    menor = num;
  }
}

console.log("Maior número: " + maior);
console.log("Menor número: " + menor);