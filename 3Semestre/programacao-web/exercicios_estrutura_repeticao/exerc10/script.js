/*Construa um programa que leia a quantidade (Q) e o preço (PR) de vários produtos diferentes,
comprados por uma empresa, e apresente o total gasto por ela. O final da lista de produtos
deverá ser indicado pelo usuário (escolha a maneira que preferir).

OBS: Não se esqueça de validar a entrada dos valores, pois não são aceitas quantidades
negativas, nem preços negativos. */

var op = 's';
var total = 0;

do{
  var q = 0;
  var pr = 0;
  
  do{
    q = parseInt(prompt("Digite a quantidade do produto: "));
  }while(q<0)
  
  do{
    pr = parseInt(prompt("Digite o preço do produto: "));
  }while(pr<0)

  total += q*pr;

  op = prompt("Deseja continuar (S)im ou (N)ão?").toLowerCase();
  
}while(op == 's');

console.log("Total Gasto: " + total);