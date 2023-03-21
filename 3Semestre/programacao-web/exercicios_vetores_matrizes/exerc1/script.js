/*Faça um algoritmo que receba a idade e o peso de 7 pessoas, calcule e mostre:
• A quantidade de pessoas com mais de 90 quilos;
• A média das idades das 7 pessoas.*/

var idade = [];
var peso = [];
var pessoasMais90  = 0;
var somaIdades = 0;

for(var i=0; i<7; i++){
  
  do{
    idade[i] = parseInt(prompt(`Digite a idade da pessoa ${i+1}`));
  }while(idade[i]<0)

  do{
    peso[i] = parseInt(prompt(`Digite o peso da pessoa ${i+1}`));
  }while(peso[i]<0)

  if(peso[i] > 90){
    pessoasMais90 ++;
  }

   somaIdades += idade[i];
}

var mediaIdades  = somaIdades/7;

console.log("Número de pessoas com mais de 90 quilos: " + pessoasMais90 );
console.log("Média das idades: " + mediaIdades );