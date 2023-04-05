/*
1 Crie uma classe Calculadora com os seguintes atributos: n1 e n2. Crie os métodos: somar(),subtrair(), dividir(), multiplicar(), dos quais utilizam o valor de n1 e n2 para efetuar as operações aritméticas denotadas nos métodos. Implemente os métodos getters e setters.
*/

class Calculadora {

    constructor(n1,n2){
        this.n1 = n1;
        this.n2 = n2;
    }

    set_n1(n1){
        this.n1 = n1;
    }

    get_n1(){
        return this.n1;
    }

    set_n2(n2){
        this.n2 = n2;
    }

    get_n2(){
        return this.n2;
    }

    somar(){
        return this.n1 + this.n2;
    }

    subtrair(){
        return this.n1 - this.n2;
    }

    dividir(){
        if(this.n2 != 0){
            return this.n1 / this.n2;
        }else{
            return "Não é possível dividir por zero!";
        }
    }

    multiplicar(){
        return this.n1 * this.n2;
    }
}

var n1 = parseInt(prompt("Digite o primeiro número: "));
var n2 = parseInt(prompt("Digite o segundo número: "));

var calculadora = new Calculadora(n1,n2);