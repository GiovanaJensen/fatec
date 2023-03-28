/*Implemente um programa que receba o tamanho de um array dado pelo usuário, e popule esse array com os valores digitados pelo usuário. Após popular, mostre no console o tamanho do array. */

function tamanhoArray(){
    var tamanho = prompt("Digite a quantidade de elementos que você quer na lista: ");
    return tamanho;
}

function array(tamanho) {
    
    var lista=[];

    for(var pos=0; pos<tamanho; pos++){

        var novo = prompt(`Digite um novo valor para a posição ${pos}: `);
        lista.push(novo);
    }

    return lista.length
    
}

console.log(`O tamanho do vetor é: ${array(tamanhoArray())}`);