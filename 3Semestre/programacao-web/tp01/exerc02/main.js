/*
Implemente um programa que receba o tamanho de um array, popule o array com números aleatórios de 0 a 10. Mostre para o usuário os valores do array populado.
*/

function tamanhoArray(){
    var tamanho = prompt("Digite o tamanho da lista: ");
    return tamanho
}

function getRandom() {
    return Math.floor(Math.random() * 10);
}

function array(tamanho){
    var lista = [];
    for(var posx=0; posx<tamanho; posx++){
        lista.push(getRandom());
    }
    return lista;
}

console.log(array(tamanhoArray()));