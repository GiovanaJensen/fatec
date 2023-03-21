/*Construa um programa que leia o número de horas trabalhadas diárias (NH) de um funcionário
por um período de 30 dias (ele trabalhou todos os 30 dias) e apresente o salário bruto
recebido por ele nesse período, sabendo que o valor do salário é R$ 10,00/hora trabalhada.*/

var nh = 0;

for(var i=1; i<=30; i++){
    nh += parseInt(prompt("Digite o número de horas trabalhadas no " + i + "° dia:"))*10;
}

console.log("Total de horas trabalhadas: " + nh);