/*A conversão de graus Fahrenheit para Celsius é obtida pela fórmula C=5/9(F-32). Construa um
programa que calcule e apresente TODAS as temperaturas (em Celsius) correspondentes
aquelas em Fahrenheit de 1 até 50, ou seja, para cada temperatura em Fahrenheit, variando
de 1 até 50, calcular e apresentar uma temperatura em Celsius.
OBS: A fórmula apresentada no enunciado é uma representação matemática e não o modo
como deve ser escrita no seu programa.*/

for(var i=1; i<=50; i++){
    var c = 5/9 * (i - 32);
    console.log(i + "F = " + c.toFixed(2) + "°C");
}