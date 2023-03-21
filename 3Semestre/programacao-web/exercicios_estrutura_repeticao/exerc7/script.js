/*Construa um programa que calcule N! (fatorial de N), sendo que o valor de N (inteiro) é
fornecido pelo usuário. Sabe-se que:
N! = 1 x 2 x 3 x 4 x .... x N
OBS: 0! = 1 (fatorial do número zero é igual a 1 por definição).
Além disso, não deve ser permitido que seja calculado o fatorial de número negativo,
pois isso não existe. */

do{
  var n = parseInt(prompt("Digite o fatorial: "));
}while(n<0);

var fatorial = 1;

if(n > 0){
  for(var i=1; i<=n; i++){
    fatorial = fatorial * i;
  }
}
console.log(n + "! = " + fatorial);