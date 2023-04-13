/*2-Implemente uma função que receba uma string como parâmetro e retorne o tamanho dessa string. */

function string(){
    var texto = prompt("Digite o texto: ");

    document.write("Tamanho: " + tamanhoString(texto));
}

function tamanhoString(texto){
    return texto.length;
}

string();