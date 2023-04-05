/*4 implemente uma função chamada calcularPotencia que recebe dois parâmetros: base e expoente. Faça a implementação recursiva dessa função.
 */

function calcularPotencia(base, expoente){
    if(expoente == 0){
        return 1;
    }else{
        return base * calcularPotencia(base, expoente-1);
    }
}

var base = parseInt(prompt("Digite o valor da base: "));
var expoente = parseInt(prompt("Digite o valor do expoente: "));

console.log(calcularPotencia(base, expoente));