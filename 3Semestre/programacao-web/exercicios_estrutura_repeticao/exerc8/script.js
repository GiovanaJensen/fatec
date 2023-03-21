/*Construa um programa que leia o conjunto de 20 números inteiros e mostre qual foi o maior valor fornecido. */

var maior = 0;

for(var i=1; i<=20; i++){
  var num = parseInt(prompt("Digite o valor do " + i + "° número:"));
  if(num > maior){
    maior = num;
  }
}

console.log("Maior número: " + maior);