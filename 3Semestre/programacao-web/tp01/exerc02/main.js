/*
Implemente um programa que receba o tamanho de um array, popule o array com números aleatórios de 0 a 10. Mostre para o usuário os valores do array populado.
*/

let tamanho = prompt("Digite o tamanho da lista: ");

var lista = [];

for(var posx=0; posx<tamanho; posx++){

    function getRandom() {
        lista.push(Math.floor(Math.random() * (10 - 1) + 1));
        
      }
      console.log(getRandom());

}

for (var posy in lista){

    console.log(`A posição ${posy} tem o valor ${lista[posy]}`);
}