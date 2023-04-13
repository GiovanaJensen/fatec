//4-Sabe-se que uma concessionária vende carros. Um carro possui modelo, marca, cor e preço. A concessionária pode conceder descontos e estes descontos podem variar de acordo com o que o usuário desejar. Implemente uma solução para esse problema

class Carro{
    constructor(modelo, marca, cor, preco){
        this.modelo = modelo;
        this.marca = marca;
        this.cor = cor;
        this.preco = preco;
    }

    desconto(valor){ // em %
        var desconto = (this.preco * valor) / 100
        return this.preco - desconto;
    }
}

var carro = new Carro("sandero" ,"renault", "preto", 200);
document.write("Valor atual após desconto: " + carro.desconto(90));