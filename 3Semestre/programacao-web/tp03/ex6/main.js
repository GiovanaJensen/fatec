/*
6 implemente uma classe chamada TipoTexto com o atributo texto. Crie o método contaVogais que retorna a quantidade de vogais que o atributos texto possui. Implemente o método encontrarOcorrencia(pedaco) que dado um pedaço como parâmetro retorna a posição desse pedaço no atributo texto. Exemplo: texto = "Andar pela praia"; pedaço = "praia", retorno do método = 4.
*/

class TipoTexto {
    constructor(texto){
        this.texto = texto;
    }

    contaVogais(){
        var qtd = 0, vogais = ['a', 'e', 'i', 'o', 'u'];
        for(var i=0; i<=this.texto.length; i++){
            for(var j=0; j<vogais.length; j++){
                if(this.texto[i] == vogais[j]){
                    qtd++;
                }
            }
        }
        return qtd;
    }

    encontrarOcorrencia(pedaco){
        return this.texto.search(pedaco);
    }
}

var texto = prompt("Digite o texto: ").toLowerCase();
var tipoTexto = new TipoTexto(texto);
document.write("Número de vogais: " + tipoTexto.contaVogais());
var pedaco = prompt("Digite o pedaço que deseja procurar: ");
document.write("<br>Posição em que se encontra o pedaço: " + tipoTexto.encontrarOcorrencia(pedaco));