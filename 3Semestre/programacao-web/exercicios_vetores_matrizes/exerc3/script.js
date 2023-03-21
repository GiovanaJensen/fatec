/*– Faça um algoritmo que receba 10 idades, pesos e alturas, calcule e mostre:

• A média das idades das 10 pessoas;
• A quantidade de pessoas com peso superior a 90 quilos e altura inferior a 1.50;
• A porcentagem de pessoas com idade entre 10 e 30 anos entre as pessoas que medem mais de
1.90.*/


var idade = [];
var peso = [];
var altura = [];
var pessoasMais90eAlturaMenor150 = 0;
var pessoasEntre10e30Maior190 = 0;
var somaIdades = 0;
var prcPessoasEntre10e30Maior190 = 0;

for(var i=0; i<10; i++){
  
  do{
    idade[i] = parseInt(prompt(`Digite a idade da pessoa ${i+1}`));
  }while(idade[i]<0)

  do{
    peso[i] = parseInt(prompt(`Digite o peso da pessoa ${i+1}`));
  }while(peso[i]<0)

  do{
    altura[i] = parseInt(prompt(`Digite a altura da pessoa ${i+1}`));
  }while(altura[i]<0)

  if(peso[i] > 90 && altura[i] < 1.50){
    pessoasMais90eAlturaMenor150 ++;
  }

  if(altura[i] > 1.90 && idade[i] > 10 && idade[i] < 30){
    pessoasEntre10e30Maior190++;
  }
  
   somaIdades += idade[i];
}

var mediaIdades  = somaIdades/10;
var prcPessoasEntre10e30Maior190 = 100*pessoasEntre10e30Maior190 / 10;

console.log("quantidade de pessoas com peso superior a 90 quilos e altura inferior a 1.50: " + pessoasMais90eAlturaMenor150 );
console.log("porcentagem de pessoas com idade entre 10 e 30 anos entre as pessoas que medem mais de 1.90: " + prcPessoasEntre10e30Maior190 + "%");
console.log("Média das idades: " + mediaIdades );