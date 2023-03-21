/*Construa um programa que apresente o valor de H, sendo H calculado por:
H = 1 + 2 + 3 + 4 + ... + N
O valor de N será apresentado pelo usuário. */

var n = parseInt(prompt("Digite o valor de N: "));
var h = 0;

for (var i = 1; i <= n; i++) {
  h += i;
}

console.log("H = " + h);