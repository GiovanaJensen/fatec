/*Construa um programa que leia a quantidade (Q) e o preço (PR) de 45 produtos diferentes,
comprados por uma empresa, e apresente o total gasto por ela.*/

var total = 0;

for(var i=1; i<=45; i++){
    var q = parseInt(prompt("Digite a quantidade do produto " + i + ":"));
    var pr = parseFloat(prompt("Digite o preço do produto " + i + ":"));
    total += q * pr;
}

console.log("Total gasto: " + total);