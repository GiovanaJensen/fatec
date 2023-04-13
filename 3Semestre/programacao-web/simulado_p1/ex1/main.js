/*Implemente uma função que receba um vetor de números e faça a soma de todos valores desse vetor. */
function valoresArray(){
    var array = [];

    var tamanhoArray = parseInt(prompt("Digite o tamanho do array: "));

    for(var i=0; i<tamanhoArray; i++){
        array[i] = parseFloat(prompt("Digite um valor da posição " + i +":"));
    }

    somaArray(array);
}

function somaArray(array){
    var soma = 0;
    for(var i=0; i<array.length; i++){
        soma += array[i];
    }

    console.log("Soma: " + soma);
}

valoresArray();