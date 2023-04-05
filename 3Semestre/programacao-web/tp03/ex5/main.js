/*5 refaça o exercício anterior efetuando a implementação recursiva da função calcularPotencia de forma imperativa, isto é,  usando estrutura de repetição ao invés de recursăo. 
 */

function calcularPotencia(base, expoente){
    var potencia = 1;
    for(var i=0; i<expoente; i++){
        potencia *= base;
    }

    return potencia;
}

var base = parseInt(prompt("Digite o valro da base: "));
var expoente = parseInt(prompt("Digite o valor do expoente: "));

console.log(calcularPotencia(base, expoente));