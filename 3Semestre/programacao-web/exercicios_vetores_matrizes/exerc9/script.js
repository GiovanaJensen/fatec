/*Faça um algoritmo que leia o nome e as idades de duas pessoas e mostre a soma das idades. */

var nomes = [];
var idades = [];
var somaIdades = 0;

for(var i=0; i<2; i++){
    nomes[i] = prompt(`Digite o nome da pessoa ${i+1}: `);
    
    do{
        idades[i] = parseInt(prompt(`Digite a idade da pessoa ${i+1}: `));
    }while(idades[i]<0)

    somaIdades += idades[i];
}

console.log("Soma das idades: " + somaIdades);