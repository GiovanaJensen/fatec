/*2 Refaça o exercício anterior, criando uma classe Calculadora2, que contenha os métodos do exercício anterior, porém,  parametrizados. Exemplo: somar(n1,n2). Esta classe não deve ter atributos. */

class Calculadora2 {

    somar(n1, n2){
        return n1 + n2;
    }

    subtrair(n1, n2){
        return n1 - n2;
    }

    dividir(n1, n2){
        if(n2 != 0){
            return n1 / n2;
        }else{
            return "Não é possível dividir por zero!";
        }
    }

    multiplicar(n1, n2){
        return n1 * n2;
    }
}
    
var n1 = parseInt(prompt("Digite o primeiro número: "));
var n2 = parseInt(prompt("Digite o segundo número: "));

var calculadora = new Calculadora2();