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