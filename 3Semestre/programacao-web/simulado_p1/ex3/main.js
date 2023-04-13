/*3-Implemente uma classe Pessoa com os atributos nome, idade. Implemente o método fazerAniversario() que incrementa a idade em um, (1) ano quando ele for invocado. Crie o método saudacao() que retorna a seguinte mensagem: "Seja bem vindo: " mais o atributo nome da classe. Crie um teste com dois objetos, executando os respectivos métodos. 
*/

class Pessoa{
    constructor(nome, idade){
        this.nome = nome;
        this.idade = idade;
    }

    fazerAniversario(){
        return this.idade + 1;
    }

    saudacao(){
        return "Seja bem vindo " + this.nome;
    }
}

var giovana = new Pessoa("giovana", 19);
document.write("Idade: " + giovana.fazerAniversario());
document.write("<br>" + giovana.saudacao());

var taylor = new Pessoa("taylor", 33);
document.write("<br> Idade: " + taylor.fazerAniversario());
document.write("<br>" + taylor.saudacao());