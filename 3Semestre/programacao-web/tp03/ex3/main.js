/*3 implemente uma classe Porta que contenha três atributos: largura, altura , cor. Implemente o método pintar(cor) que recebe uma cor como parâmetro e alterar a cor atual da porta.
*/

class Porta{
    constructor(largura, altura, cor){
        this.largura = largura;
        this.altura = altura;
        this.cor = cor;
    }

    get_largura(){
        return this.largura;
    }

    get_altura(){
        return this.altura;
    }

    get_cor(){
        return this.cor;
    }

    pintar(cor){
        this.cor = cor;
    }
}

var largura = parseInt(prompt("Digite a largura: "));
var altura = parseInt(prompt("Digite a altura: "));
var cor = prompt("Digite a cor: ");

var porta = new Porta(largura, altura, cor);