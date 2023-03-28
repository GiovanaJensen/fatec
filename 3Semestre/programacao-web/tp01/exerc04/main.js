/*4. Implemente um programa que tenha um matriz de ordem dada pelo usuário, popule a matriz com valores dados pelo usuário e mostre o menor valor da matriz. O menor valor deve ser procurado após o preenchimento da matriz.*/

var matriz2 = [];

var linhas = parseInt(prompt("Determine o número de linhas da matriz: "));
var colunas = parseInt(prompt("Determine o número de colunas: "));

for(var i = 0; i < linhas; i++){
  matriz2.push([]);
  for(var j = 0; j < colunas; j++){
    matriz2[i][j] = parseInt(prompt("Digite o valor desejado para a posição " + i + " " + j));
  }
}

function menorValor(matriz2){
  var ehMenor = matriz2[0][0];
  for(var i = 0; i < matriz2.length; i++){
    for(var j = 0; j < matriz2[i].length; j++){
      if (matriz2[i][j] < ehMenor){
        ehMenor = matriz2[i][j];
      }
    }
  }
  return ehMenor;
}

console.log("O menor valor presente na matriz é: " + menorValor(matriz2));