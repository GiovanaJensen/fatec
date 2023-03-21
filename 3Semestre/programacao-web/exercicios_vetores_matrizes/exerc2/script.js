/*Faça um algoritmo que receba 10 números, calcule e mostre a quantidade de números entre 30 e
90. */

var numeros = [];
var qtdNumerosEntre30e90 = 0;

for(var i=0; i<10; i++){
  numeros[i] = parseFloat(prompt(`Digite o ${i+1} número:`));
  console.log(numeros[i]);

  if(numeros[i] > 30 && numeros[i] < 90){
    qtdNumerosEntre30e90++;
  }
}

console.log("quantidade de números entre 30 e 90: " + qtdNumerosEntre30e90);